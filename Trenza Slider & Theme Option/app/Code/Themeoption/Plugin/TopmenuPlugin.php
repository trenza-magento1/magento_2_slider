<?php

namespace Trenza\Themeoption\Plugin;

class TopmenuPlugin
{

    public function afterGetHtml(\Magento\Theme\Block\Html\Topmenu $topmenu, $html)
    {


        $html .= "<li class=\"level0 nav-4 level-top parent ui-menu-item\">";
        $html .= "<a href=\"" . "REPLACE_BY_YOUR_EXTERNAL_URL" . "\" class=\"level-top ui-corner-all\" aria-haspopup=\"true\" tabindex=\"-1\" role=\"menuitem\"><span class=\"ui-menu-icon ui-icon ui-icon-carat-1-e\"></span><span>" . __("REPLACE_BY_THE_TITLE_OF_THE_LINK") . "</span></a>";
        $html .= "<ul class=\"level0 submenu ui-menu ui-widget ui-widget-content ui-corner-all\" role=\"menu\" aria-expanded=\"false\" style=\"display: none; top: 47px; left: -0.4375px;\" aria-hidden=\"true\">";

        $html .= "<li class=\"level1 nav-5-1 first ui-menu-item\" role=\"presentation\">";
        $html .= "<a href=\"" . "REPLACE_BY_YOUR_EXTERNAL_URL" . "\" class=\"ui-corner-all\" tabindex=\"-1\" role=\"menuitem\"><span>" . __("REPLACE_BY_THE_TITLE_OF_THE_LINK") . "</span></a>";
        $html .= "</li>";

        $html .= "<li class=\"level1 nav-5-1 first ui-menu-item\" role=\"presentation\">";
        $html .= "<a href=\"" . "REPLACE_BY_YOUR_EXTERNAL_URL" . "\" class=\"ui-corner-all\" tabindex=\"-1\" role=\"menuitem\"><span>" . __("REPLACE_BY_THE_TITLE_OF_THE_LINK") . "</span></a>";
        $html .= "</li>";

        $html .= "<li class=\"level1 nav-5-1 first ui-menu-item\" role=\"presentation\">";
        $html .= "<a href=\"" . "REPLACE_BY_YOUR_EXTERNAL_URL" . "\" class=\"ui-corner-all\" tabindex=\"-1\" role=\"menuitem\"><span>" . __("REPLACE_BY_THE_TITLE_OF_THE_LINK") . "</span></a>";
        $html .= "</li>";

        $html .= "</ul>";
        $html .= "</li>";

        return $html;
    }


}