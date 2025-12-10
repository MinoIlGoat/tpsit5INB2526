<?php
function parser($file = "config.xml") {
    if (!file_exists($file)) {
        return ['header' => '', 'footer' => [], 'menu' => [], 'title' => ''];
    }

    $xml = simplexml_load_file($file);
    if ($xml === false) {
        return ['header' => '', 'footer' => [], 'menu' => [], 'title' => ''];
    }

    $header = '';
    $title = '';
    $footer = [];
    $menuItems = [];

    foreach ($xml->children() as $child) {
        $name = $child->getName();

        switch ($name) {
            case "menu":
                foreach ($child->children() as $item) {
                    $label = (string)$item->label;
                    $href = (string)$item->href;
                    if ($label != '' && $href != '') {
                        $menuItems[] = ['label' => $label, 'href' => $href];
                    }
                }
                break;

            case "header":
                if (isset($child->text)) {
                    $header = (string)$child->text;
                } else {
                    $header = (string)$child->title;
                }
                break;

            case "title":
                if (isset($child->text)) {
                    $title = (string)$child->text;
                }
                break;

            case "footer":
                foreach ($child->children() as $item) {
                    $label1 = (string)$item->label1;
                    $label2 = (string)$item->label2;
                    if ($label1 != '' || $label2 != '') {
                        $footer[] = ['label1' => $label1, 'label2' => $label2];
                    }
                }
                break;
        }
    }

    return [
        'header' => $header,
        'footer' => $footer,
        'menu' => $menuItems,
        'title' => $title,
    ];
}
?>
