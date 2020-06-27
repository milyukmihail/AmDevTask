<?php

include 'simple_html_dom.php';

$seasons = ['/2009-10', '/2010-11', '/2011-12', '/2012-13', '/2013-14', '/2014-15', '/2015-16', '/2016-17', '/2017-18', '/2018-19', ''];

if (isset($_POST["team"]) && !empty($_POST["team"])) {
    echo "Team " . $_POST["team"] . "<br/>";
    foreach ($seasons as $season) {
        $html = file_get_html('https://terrikon.com/football/italy/championship' . $season . '/table');
        foreach ($html->find('table.big a') as $div) {
            if ($div->innertext() == strip_tags($_POST["team"])) {
                $el = $div->parent()->prev_sibling();
                if (empty($season))
                    echo 'Season /2019-20/ - ' . str_replace('.', '', $el->outertext()) . ' place <br/>';
                else {
                    echo 'Season ' . $season . '/ - ' . str_replace('.', '', $el->outertext()) . ' place <br/>';
                }
            }
        }
        $html->clear();
        unset($html);
    }
} else {
    echo "Team name not received";
    die;
}
