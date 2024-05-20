<?php
class HtmlGenerator
{
    private $html;

    public function __construct()
    {
        $this->html = "<!DOCTYPE html>\n<html>\n";
    }
    private function buildAttributes(array $attributes): string
    {
        $attrString = '';
        foreach ($attributes as $key => $value) {
            $attrString .= " {$key}=\"" . htmlspecialchars($value, ENT_QUOTES) . "\"";
        }
        return $attrString;
    }

    public function addHeader($text, $level = 1, array $attributes = [])
    {
        $attrString = $this->buildAttributes($attributes);
        $this->html .= "<h{$level}{$attrString}>{$text}";
        return $this;
    }
    public function closeHeader($level = 1)
    {
        $this->html .= "</h{$level}>\n";
        return $this;
    }
    public function addParagraph($text, array $attributes = [])
    {
        $attrString = $this->buildAttributes($attributes);
        $this->html .= "<p{$attrString}>{$text}";
        return $this;
    }
    public function closeParagraph()
    {
        $this->html .= "</p>\n";
        return $this;
    }

    public function addLink($url, $text, array $attributes = [])
    {
        $attrString = $this->buildAttributes($attributes);
        $this->html .= "<a href='{$url}'{$attrString}>{$text}";
        return $this;
    }
    public function closeLink()
    {
        $this->html .= "</a>\n";
        return $this;
    }

    public function addMeta(array $attributes = [])
    {
        $attrString = $this->buildAttributes($attributes);
        $this->html .= "<meta{$attrString}/>\n";
        return $this;
    }

    public function addHead(array $attributes = [])
    {
        $attrString = $this->buildAttributes($attributes);
        $this->html .= "<head{$attrString}>";
        return $this;
    }
    public function closeHead()
    {
        $this->html .= "</head>\n";
        return $this;
    }

    public function addStylesheet($href, array $attributes = [])
    {
        $attrString = $this->buildAttributes($attributes);
        $this->html .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"{$href}\"{$attrString}/>\n";
        return $this;
    }

    public function addBody(array $attributes = [])
    {
        $attrString = $this->buildAttributes($attributes);
        $this->html .= "<body{$attrString}>";
        return $this;
    }
    public function closeBody()
    {
        $this->html .= "</body>\n";
        return $this;
    }

    public function addTitle($text, array $attributes = [])
    {
        $attrString = $this->buildAttributes($attributes);
        $this->html .= "<title{$attrString}>{$text}";
        return $this;
    }
    public function closeTitle()
    {
        $this->html .= "</title>\n";
        return $this;
    }

    public function addPreformattedText($text, array $attributes = [])
    {
        $attrString = $this->buildAttributes($attributes);
        $this->html .= "<pre{$attrString}>{$text}";
        return $this;
    }

    public function closePreformattedText()
    {
        $this->html .= "</pre>\n";
        return $this;
    }

    public function addBoldText($text, array $attributes = [])
    {
        $attrString = $this->buildAttributes($attributes);
        $this->html .= "<b{$attrString}>{$text}";
        return $this;
    }

    public function closeBoldText()
    {
        $this->html .= "</b>\n";
        return $this;
    }

    public function addItalicText($text, array $attributes = [])
    {
        $attrString = $this->buildAttributes($attributes);
        $this->html .= "<i{$attrString}>{$text}";
        return $this;
    }

    public function closeItalicText()
    {
        $this->html .= "</i>\n";
        return $this;
    }

    public function addCode($text, array $attributes = [])
    {
        $attrString = $this->buildAttributes($attributes);
        $this->html .= "<code{$attrString}>{$text}";
        return $this;
    }

    public function closeCode()
    {
        $this->html .= "</code>\n";
        return $this;
    }

    public function addCite($text, array $attributes = [])
    {
        $attrString = $this->buildAttributes($attributes);
        $this->html .= "<cite{$attrString}>{$text}";
        return $this;
    }

    public function closeCite()
    {
        $this->html .= "</cite>\n";
        return $this;
    }

    public function addAddress($text, array $attributes = [])
    {
        $attrString = $this->buildAttributes($attributes);
        $this->html .= "<address{$attrString}>{$text}";
        return $this;
    }

    public function closeAddress()
    {
        $this->html .= "</address>\n";
        return $this;
    }

    public function addEmphasisText($text, array $attributes = [])
    {
        $attrString = $this->buildAttributes($attributes);
        $this->html .= "<em{$attrString}>{$text}";
        return $this;
    }

    public function closeEmphasisText()
    {
        $this->html .= "</em>\n";
        return $this;
    }

    public function addStrongText($text, array $attributes = [])
    {
        $attrString = $this->buildAttributes($attributes);
        $this->html .= "<strong{$attrString}>{$text}";
        return $this;
    }

    public function closeStrongText()
    {
        $this->html .= "</strong>\n";
        return $this;
    }

    public function addBlockquote($text, array $attributes = [])
    {
        $attrString = $this->buildAttributes($attributes);
        $this->html .= "<blockquote{$attrString}>{$text}";
        return $this;
    }

    public function closeBlockquote()
    {
        $this->html .= "</blockquote>\n";
        return $this;
    }

    public function addSpan($text, array $attributes = [])
    {
        $attrString = $this->buildAttributes($attributes);
        $this->html .= "<span{$attrString}>{$text}";
        return $this;
    }

    public function closeSpan()
    {
        $this->html .= "</span>\n";
        return $this;
    }

    public function addLineBreak()
    {
        $this->html .= "<br>\n";
        return $this;
    }

    public function addDiv($text = '', array $attributes = [])
    {
        $attrString = $this->buildAttributes($attributes);
        $this->html .= "<div{$attrString}>{$text}";
        return $this;
    }

    public function closeDiv()
    {
        $this->html .= "</div>\n";
        return $this;
    }

    public function addUnorderedList(array $items = [], array $attributes = [])
    {
        $attrString = $this->buildAttributes($attributes);
        $list = "<ul{$attrString}>";
        foreach ($items as $item) {
            $list .= "<li>{$item}</li>";
        }
        $list .= "</ul>";
        $this->html .= $list;
        return $this;
    }

    public function addOrderedList(array $items = [], array $attributes = [], $start = null)
    {
        $attrString = $this->buildAttributes($attributes);
        $startAttr = ($start !== null) ? " start=\"{$start}\"" : '';
        $list = "<ol{$attrString}{$startAttr}>";
        foreach ($items as $item) {
            $list .= "<li>{$item}</li>";
        }
        $list .= "</ol>";
        $this->html .= $list;
        return $this;
    }

    public function addDefinitionList(array $definitions = [], array $attributes = [])
    {
        $attrString = $this->buildAttributes($attributes);
        $dl = "<dl{$attrString}>";
        foreach ($definitions as $term => $definition) {
            $dl .= "<dt>{$term}</dt><dd>{$definition}</dd>";
        }
        $dl .= "</dl>";
        $this->html .= $dl;
        return $this;
    }

    public function addDefinitionTerm($text, array $attributes = [])
    {
        $attrString = $this->buildAttributes($attributes);
        $this->html .= "<dt{$attrString}>{$text}";
        return $this;
    }

    public function closeDefinitionTerm()
    {
        $this->html .= "</dt>\n";
        return $this;
    }

    public function addDefinitionDescription($text, array $attributes = [])
    {
        $attrString = $this->buildAttributes($attributes);
        $this->html .= "<dd{$attrString}>{$text}";
        return $this;
    }

    public function closeDefinitionDescription()
    {
        $this->html .= "</dd>\n";
        return $this;
    }

    // New methods Added
    public function addAside($content, array $attributes = [])
    {
        $attrString = $this->buildAttributes($attributes);
        $this->html .= "<aside{$attrString}>{$content}";
        return $this;
    }

    public function closeAside()
    {
        $this->html .= "</aside>\n";
        return $this;
    }

    public function addSection(array $attributes = [])
    {
        $attrString = $this->buildAttributes($attributes);
        $this->html .= "<section{$attrString}>";
        return $this;
    }

    public function addImage(array $attributes = [])
    {
        $attrString = $this->buildAttributes($attributes);
        $this->html .= "<img{$attrString}>";
        return $this;
    }
    public function closeSection()
    {
        $this->html .= "</section>\n";
        return $this;
    }

    public function addNav($content, array $attributes = [])
    {
        $attrString = $this->buildAttributes($attributes);
        $this->html .= "<nav{$attrString}>{$content}";
        return $this;
    }

    public function closeNav()
    {
        $this->html .= "</nav>\n";
        return $this;
    }

    public function addTable(array $attributes = [])
    {
        $attrString = $this->buildAttributes($attributes);
        $this->html .= "<table{$attrString}>\n";
        return $this;
    }

    public function closeTable()
    {
        $this->html .= "</table>\n";
        return $this;
    }

    public function addRow(array $cells)
    {
        $this->html .= "<tr>\n";
        foreach ($cells as $cell) {
            $this->html .= "<td>{$cell}</td>\n";
        }
        $this->html .= "</tr>\n";
        return $this;
    }

    //End of New Methods Added

    public function addFooter($text, array $attributes = [])
    {
        $attrString = $this->buildAttributes($attributes);
        $this->html .= "<footer{$attrString}>{$text}</footer>\n";
        return $this;
    }
    public function closeFooter()
    {
        $this->html .= "</footer>\n";
        return $this;
    }
    public function endHTML()
    {
        $this->html .= "</html>";
        return $this;
    }

    public function getHTML()
    {
        return $this->html;
    }

    public function saveToFile($filename)
    {
        $result = file_put_contents($filename, $this->html);
        if ($result === false) {
            throw new Exception("Failed to write to file.");
        }
    }
}
