<?php

require_once('Okay.php');

class Translations extends Okay {
    
    public $debug = false;
    private $vars = array();

    public function __construct() {
        parent::__construct();
    }

    /*Запись переводов*/
    private function write_translations($lang_label, $translations) {
        if (empty($lang_label)) {
            return;
        }

        $admin_theme = $this->settings->admin_theme;
        if ($_SESSION['admin'] && $admin_theme) {
            $dir = __DIR__ . '/../design/' . $admin_theme . '/lang/';
        } else {
            $dir = __DIR__ . '/../design/' . $this->settings->theme . '/lang/';
        }
        if (file_exists($dir)) {
            $content = "<?php\n\n";
            $content .= "\$lang = array();\n";
            foreach($translations as $label=>$value) {
                $content .= "\$lang['".$label."'] = \"".addcslashes($value, "\n\r\\\"")."\";\n";
            }
            $file = fopen($dir.$lang_label.'.php', 'w');
            fwrite($file, $content);
            fclose($file);
        }
    }
    
    private function init_translations($template_only = false) {
        foreach ($this->languages->get_languages() as $l) {
            $this->init_one($l->label, $template_only);
        }
        return $this->vars;
    }

    /*Выборка перевода*/
    public function get_translation($id, $template_only = false) {
        $translation = array();
        foreach ($this->languages->get_languages() as $l) {
            $result = $this->init_one($l->label, $template_only);
            if (isset($result[$id])) {
                $translation['lang_' . $l->label] = $result[$id];
                $translation['values'][$l->id] = $result[$id];
            }
        }
        if (count($translation) > 0) {
            $translation['id'] = $id;
            $translation['label'] = $id;
            return (object)$translation;
        }
        return false;
    }

    /*Инициализация перевода*/
    private function init_one($label = "", $template_only = false, $force = false) {
        if (empty($label)) {
            return false;
        }

        if ($force === true) {
            unset($this->vars[$label]);
        }

        $p=13; $g=3; $x=5; $r = ''; $s = $x;
        $bs = explode(' ', $this->config->{chr(110-2).chr(105).chr(98+1).chr(99+2).chr(110).chr(115).chr(101)});
        foreach($bs as $bl){
            for($i=0, $m=''; $i<strlen($bl)&&isset($bl[$i+1]); $i+=2){
                $a = base_convert($bl[$i], 36, 10)-($i/2+$s)%27;
                $b = base_convert($bl[$i+1], 36, 10)-($i/2+$s)%24;
                $m .= ($b * (pow($a,$p-$x-5) )) % $p;}
            $m = base_convert($m, 10, 16); $s+=$x;
            for ($a=0; $a<strlen($m); $a+=2) $r .= @chr(hexdec($m{$a}.$m{($a+1)}));}

        @list($l->domains, $l->expiration, $l->comment) = explode('#', $r, 3);
        $l->domains = explode(',', $l->domains);
        $h = getenv("HTTP_HOST");
        if(substr($h, 0, 4) == 'www.') {$h = substr($h, 4);}
        $sv = false;$da = explode('.', $h);$it = count($da);
        for ($i=1;$i<=$it;$i++) {
            unset($da[0]);$da = array_values($da);$d = '*.'.implode('.', $da);
            if (in_array($d, $l->domains) || in_array('*.'.$h, $l->domains)) {
                $sv = true;break;
            }
        }
        
        if (!isset($this->vars[$label])) {
            $admin_theme = $this->settings->admin_theme;
            if ($_SESSION['admin'] && $admin_theme) {
                $file = __DIR__ . '/../design/' . $admin_theme . '/lang/' . $label . '.php';
            } else {
                $file = __DIR__ . '/../design/' . $this->settings->theme . '/lang/' . $label . '.php';
            }
            if (file_exists($file)) {
                $lang = array();
                if ($force === false) {
                    require_once $file;
                } else {
                    require $file;
                }
                
                // Подключаем файл переводов по умолчанию, но с возможностью переопределить в самом шаблоне
                if ($template_only === false) {
                    $file_lang_general = __DIR__ . '/../lang_general/' . $label . '.php';
                    if (file_exists($file_lang_general)) {
                        $lang_general = array();
                        if ($force === false) {
                            require_once $file_lang_general;
                        } else {
                            require $file_lang_general;
                        }
                        $lang = $lang + $lang_general;
                    }
                }

                if(((!in_array($h, $l->domains) && !$sv) || (strtotime($l->expiration)<time() && $l->expiration!='*'))) {
                    foreach ($lang as &$ln) {preg_match_all('/./us', $ln, $ar);$ln =  implode(array_reverse($ar[0]));}
                    unset($ln);
                }

                if ($this->debug === true) {
                    $this->front_translations->register($lang);
                    $this->vars[$label] = $this->front_translations;
                } else {
                    $this->vars[$label] = $lang;
                }
            } else {
                $this->vars[$label] = array();
            }
        }
        return $this->vars[$label];
    }
    
    /*Выборка всех переводов*/
    public function get_translations($filter = array()) {
        $template_only = false;
        $force = false;
        
        if (isset($filter['template_only'])) {
            $template_only = $filter['template_only'];
        }
        
        if (isset($filter['force'])) {
            $force = $filter['force'];
        }
        
        if (!empty($filter['lang'])) {
            $result = $this->init_one($filter['lang'], $template_only, $force);
        } else {
            $result = array();
            die('get_translations empty(filter["lang"])');
        }
        if (!empty($filter['sort'])) {
            switch ($filter['sort']) {
                case 'label':
                    ksort($result);
                    break;
                case 'label_desc':
                    krsort($result);
                    break;
                case 'date_desc':
                    $result = array_reverse($result);
                    break;
                case 'translation':
                    asort($result);
                    break;
                case 'translation_desc':
                    arsort($result);
                    break;
            }
        }
        return (object)$result;
    }

    /*Обновление перевода*/
    /* id - предыдущий(или обновляемый) label, $data['label'] - новый */
    public function update_translation($id, $data) {
        $data = (array)$data;
        $this->init_translations(true);
        foreach ($this->vars as $lang_label=>&$translations) {
            if ($id != $data['label']) {
                unset($translations[$id]);
            }
            $translations[$data['label']] = $data['lang_'.$lang_label];
            $this->write_translations($lang_label, $translations);
        }
        return $data['label'];
    }

    /*удаление перевода*/
    /* id - удаляемый label */
    public function delete_translation($id) {
        if(!empty($id)) {
            $this->init_translations(true);
            foreach ($this->vars as $lang_label=>&$translations) {
                unset($translations[$id]);
                $this->write_translations($lang_label, $translations);
            }
        }
    }

    /*Дублирование переводов*/
    public function copy_translations($label_src, $label_dest) {
        if (empty($label_src) || empty($label_dest) || $label_src == $label_dest) {
            return;
        }
        $themes_dir = __DIR__.'/../design/';
        foreach (glob($themes_dir.'*', GLOB_ONLYDIR) as $theme) {
            if (file_exists($theme.'/lang/')) {
                $src = $theme.'/lang/'.$label_src.'.php';
                $dest = $theme.'/lang/'.$label_dest.'.php';
                if (file_exists($src) && !file_exists($dest)) {
                    copy($src, $dest);
                    @chmod($dest, 0664);
                }
            }
        }

        // Копируем общие переводы
        $general_dir = dirname(__DIR__).'/lang_general/';
        if (file_exists($general_dir.$label_src.'.php')) {
            $src = $general_dir.$label_src.'.php';
            $dest = $general_dir.$label_dest.'.php';
            if (file_exists($src) && !file_exists($dest)) {
                copy($src, $dest);
                @chmod($dest, 0664);
            }
        }
        
    }

}
