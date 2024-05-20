<?php
class CSSGenerator
{
    private $styles;

    public function __construct()
    {
        $this->styles = [];
    }

    public function setProperty($selector, $property, $value)
    {
        if (!isset($this->styles[$selector])) {
            $this->styles[$selector] = [];
        }
        $this->styles[$selector][$property] = $value;
        return $this;
    }

    // Box Model
    public function setWidth($selector, $width)
    {
        return $this->setProperty($selector, 'width', $width);
    }
    public function setHeight($selector, $height)
    {
        return $this->setProperty($selector, 'height', $height);
    }
    public function setMinHeight($selector, $minHeight)
    {
        return $this->setProperty($selector, 'min-height', $minHeight);
    }

    public function setMargin($selector, $margin)
    {
        return $this->setProperty($selector, 'margin', $margin);
    }
    public function setMarginTop($selector, $marginTop)
    {
        return $this->setProperty($selector, 'margin-top', $marginTop);
    }
    public function setMarginRight($selector, $marginRight)
    {
        return $this->setProperty($selector, 'margin-right', $marginRight);
    }
    public function setMarginBottom($selector, $marginBottom)
    {
        return $this->setProperty($selector, 'margin-bottom', $marginBottom);
    }
    public function setMarginLeft($selector, $marginLeft)
    {
        return $this->setProperty($selector, 'margin-left', $marginLeft);
    }
    public function setPadding($selector, $padding)
    {
        return $this->setProperty($selector, 'padding', $padding);
    }
    public function setPaddingTop($selector, $paddingTop)
    {
        return $this->setProperty($selector, 'padding-top', $paddingTop);
    }
    public function setPaddingRight($selector, $paddingRight)
    {
        return $this->setProperty($selector, 'padding-right', $paddingRight);
    }
    public function setPaddingBottom($selector, $paddingBottom)
    {
        return $this->setProperty($selector, 'padding-bottom', $paddingBottom);
    }
    public function setPaddingLeft($selector, $paddingLeft)
    {
        return $this->setProperty($selector, 'padding-left', $paddingLeft);
    }
    public function setBorder($selector, $border)
    {
        return $this->setProperty($selector, 'border', $border);
    }
    public function setBorderWidth($selector, $borderWidth)
    {
        return $this->setProperty($selector, 'border-width', $borderWidth);
    }
    public function setBorderStyle($selector, $borderStyle)
    {
        return $this->setProperty($selector, 'border-style', $borderStyle);
    }
    public function setBorderColor($selector, $borderColor)
    {
        return $this->setProperty($selector, 'border-color', $borderColor);
    }
    public function setBorderTop($selector, $borderTop)
    {
        return $this->setProperty($selector, 'border-top', $borderTop);
    }
    public function setBorderRadius($selector, $borderRadius)
    {
        return $this->setProperty($selector, 'border-radius', $borderRadius);
    }
    public function setBorderRight($selector, $borderRight)
    {
        return $this->setProperty($selector, 'border-right', $borderRight);
    }
    public function setBorderBottom($selector, $borderBottom)
    {
        return $this->setProperty($selector, 'border-bottom', $borderBottom);
    }
    public function setBorderLeft($selector, $borderLeft)
    {
        return $this->setProperty($selector, 'border-left', $borderLeft);
    }
    public function setBoxSizing($selector, $boxSizing)
    {
        return $this->setProperty($selector, 'box-sizing', $boxSizing);
    }

    // Background
    public function setBackground($selector, $background)
    {
        return $this->setProperty($selector, 'background', $background);
    }
    public function setBackgroundColor($selector, $backgroundColor)
    {
        return $this->setProperty($selector, 'background-color', $backgroundColor);
    }
    public function setBackgroundImage($selector, $backgroundImage)
    {
        return $this->setProperty($selector, 'background-image', $backgroundImage);
    }
    public function setBackgroundRepeat($selector, $backgroundRepeat)
    {
        return $this->setProperty($selector, 'background-repeat', $backgroundRepeat);
    }
    public function setBackgroundPosition($selector, $backgroundPosition)
    {
        return $this->setProperty($selector, 'background-position', $backgroundPosition);
    }
    public function setBackgroundSize($selector, $backgroundSize)
    {
        return $this->setProperty($selector, 'background-size', $backgroundSize);
    }
    public function setBackgroundAttachment($selector, $backgroundAttachment)
    {
        return $this->setProperty($selector, 'background-attachment', $backgroundAttachment);
    }
    public function setBackgroundClip($selector, $backgroundClip)
    {
        return $this->setProperty($selector, 'background-clip', $backgroundClip);
    }
    public function setBackgroundOrigin($selector, $backgroundOrigin)
    {
        return $this->setProperty($selector, 'background-origin', $backgroundOrigin);
    }

    // Typography
    public function setFont($selector, $font)
    {
        return $this->setProperty($selector, 'font', $font);
    }
    public function setFontFamily($selector, $fontFamily)
    {
        return $this->setProperty($selector, 'font-family', $fontFamily);
    }
    public function setFontSize($selector, $fontSize)
    {
        return $this->setProperty($selector, 'font-size', $fontSize);
    }
    public function setFontWeight($selector, $fontWeight)
    {
        return $this->setProperty($selector, 'font-weight', $fontWeight);
    }
    public function setFontStyle($selector, $fontStyle)
    {
        return $this->setProperty($selector, 'font-style', $fontStyle);
    }
    public function setFontVariant($selector, $fontVariant)
    {
        return $this->setProperty($selector, 'font-variant', $fontVariant);
    }
    public function setFontStretch($selector, $fontStretch)
    {
        return $this->setProperty($selector, 'font-stretch', $fontStretch);
    }
    public function setLineHeight($selector, $lineHeight)
    {
        return $this->setProperty($selector, 'line-height', $lineHeight);
    }
    public function setTextAlign($selector, $textAlign)
    {
        return $this->setProperty($selector, 'text-align', $textAlign);
    }
    public function setTextDecoration($selector, $textDecoration)
    {
        return $this->setProperty($selector, 'text-decoration', $textDecoration);
    }
    public function setTextTransform($selector, $textTransform)
    {
        return $this->setProperty($selector, 'text-transform', $textTransform);
    }
    public function setLetterSpacing($selector, $letterSpacing)
    {
        return $this->setProperty($selector, 'letter-spacing', $letterSpacing);
    }
    public function setWordSpacing($selector, $wordSpacing)
    {
        return $this->setProperty($selector, 'word-spacing', $wordSpacing);
    }
    public function setTextIndent($selector, $textIndent)
    {
        return $this->setProperty($selector, 'text-indent', $textIndent);
    }
    public function setTextShadow($selector, $textShadow)
    {
        return $this->setProperty($selector, 'text-shadow', $textShadow);
    }
    public function setWhiteSpace($selector, $whiteSpace)
    {
        return $this->setProperty($selector, 'white-space', $whiteSpace);
    }
    public function setVerticalAlign($selector, $verticalAlign)
    {
        return $this->setProperty($selector, 'vertical-align', $verticalAlign);
    }
    public function setColor($selector, $color)
    {
        return $this->setProperty($selector, 'color', $color);
    }
    public function setDirection($selector, $direction)
    {
        return $this->setProperty($selector, 'direction', $direction);
    }

    // Positioning
    public function setPosition($selector, $position)
    {
        return $this->setProperty($selector, 'position', $position);
    }
    public function setTop($selector, $top)
    {
        return $this->setProperty($selector, 'top', $top);
    }
    public function setRight($selector, $right)
    {
        return $this->setProperty($selector, 'right', $right);
    }
    public function setBottom($selector, $bottom)
    {
        return $this->setProperty($selector, 'bottom', $bottom);
    }
    public function setLeft($selector, $left)
    {
        return $this->setProperty($selector, 'left', $left);
    }
    public function setZIndex($selector, $zIndex)
    {
        return $this->setProperty($selector, 'z-index', $zIndex);
    }
    public function setDisplay($selector, $display)
    {
        return $this->setProperty($selector, 'display', $display);
    }
    public function setFloat($selector, $float)
    {
        return $this->setProperty($selector, 'float', $float);
    }
    public function setClear($selector, $clear)
    {
        return $this->setProperty($selector, 'clear', $clear);
    }
    public function setOverflow($selector, $overflow)
    {
        return $this->setProperty($selector, 'overflow', $overflow);
    }
    public function setOverflowX($selector, $overflowX)
    {
        return $this->setProperty($selector, 'overflow-x', $overflowX);
    }
    public function setOverflowY($selector, $overflowY)
    {
        return $this->setProperty($selector, 'overflow-y', $overflowY);
    }
    public function setClip($selector, $clip)
    {
        return $this->setProperty($selector, 'clip', $clip);
    }
    public function setVisibility($selector, $visibility)
    {
        return $this->setProperty($selector, 'visibility', $visibility);
    }

    // Flexbox
    public function setFlexDirection($selector, $flexDirection)
    {
        return $this->setProperty($selector, 'flex-direction', $flexDirection);
    }
    public function setFlexWrap($selector, $flexWrap)
    {
        return $this->setProperty($selector, 'flex-wrap', $flexWrap);
    }
    public function setFlexFlow($selector, $flexFlow)
    {
        return $this->setProperty($selector, 'flex-flow', $flexFlow);
    }
    public function setJustifyContent($selector, $justifyContent)
    {
        return $this->setProperty($selector, 'justify-content', $justifyContent);
    }
    public function setAlignItems($selector, $alignItems)
    {
        return $this->setProperty($selector, 'align-items', $alignItems);
    }
    public function setAlignContent($selector, $alignContent)
    {
        return $this->setProperty($selector, 'align-content', $alignContent);
    }
    public function setOrder($selector, $order)
    {
        return $this->setProperty($selector, 'order', $order);
    }
    public function setFlexGrow($selector, $flexGrow)
    {
        return $this->setProperty($selector, 'flex-grow', $flexGrow);
    }
    public function setFlexShrink($selector, $flexShrink)
    {
        return $this->setProperty($selector, 'flex-shrink', $flexShrink);
    }
    public function setFlexBasis($selector, $flexBasis)
    {
        return $this->setProperty($selector, 'flex-basis', $flexBasis);
    }
    public function setAlignSelf($selector, $alignSelf)
    {
        return $this->setProperty($selector, 'align-self', $alignSelf);
    }

    // Grid
    public function setGridTemplateColumns($selector, $gridTemplateColumns)
    {
        return $this->setProperty($selector, 'grid-template-columns', $gridTemplateColumns);
    }
    public function setGridTemplateRows($selector, $gridTemplateRows)
    {
        return $this->setProperty($selector, 'grid-template-rows', $gridTemplateRows);
    }
    public function setGridTemplateAreas($selector, $gridTemplateAreas)
    {
        return $this->setProperty($selector, 'grid-template-areas', $gridTemplateAreas);
    }
    public function setGridColumnGap($selector, $gridColumnGap)
    {
        return $this->setProperty($selector, 'grid-column-gap', $gridColumnGap);
    }
    public function setGridRowGap($selector, $gridRowGap)
    {
        return $this->setProperty($selector, 'grid-row-gap', $gridRowGap);
    }
    public function setGridGap($selector, $gridGap)
    {
        return $this->setProperty($selector, 'grid-gap', $gridGap);
    }
    public function setJustifyItems($selector, $justifyItems)
    {
        return $this->setProperty($selector, 'justify-items', $justifyItems);
    }
    public function setGridAlignItems($selector, $alignItems)
    {
        return $this->setProperty($selector, 'align-items', $alignItems);
    }
    public function setGridJustifyContent($selector, $justifyContent)
    {
        return $this->setProperty($selector, 'justify-content', $justifyContent);
    }
    public function setGridAlignContent($selector, $alignContent)
    {
        return $this->setProperty($selector, 'align-content', $alignContent);
    }
    public function setGridAutoColumns($selector, $gridAutoColumns)
    {
        return $this->setProperty($selector, 'grid-auto-columns', $gridAutoColumns);
    }
    public function setGridAutoRows($selector, $gridAutoRows)
    {
        return $this->setProperty($selector, 'grid-auto-rows', $gridAutoRows);
    }
    public function setGridAutoFlow($selector, $gridAutoFlow)
    {
        return $this->setProperty($selector, 'grid-auto-flow', $gridAutoFlow);
    }
    public function setGridColumn($selector, $gridColumn)
    {
        return $this->setProperty($selector, 'grid-column', $gridColumn);
    }
    public function setGridColumnStart($selector, $gridColumnStart)
    {
        return $this->setProperty($selector, 'grid-column-start', $gridColumnStart);
    }
    public function setGridColumnEnd($selector, $gridColumnEnd)
    {
        return $this->setProperty($selector, 'grid-column-end', $gridColumnEnd);
    }
    public function setGridRow($selector, $gridRow)
    {
        return $this->setProperty($selector, 'grid-row', $gridRow);
    }
    public function setGridRowStart($selector, $gridRowStart)
    {
        return $this->setProperty($selector, 'grid-row-start', $gridRowStart);
    }
    public function setGridRowEnd($selector, $gridRowEnd)
    {
        return $this->setProperty($selector, 'grid-row-end', $gridRowEnd);
    }
    public function setGridArea($selector, $gridArea)
    {
        return $this->setProperty($selector, 'grid-area', $gridArea);
    }
    public function setPlaceItems($selector, $placeItems)
    {
        return $this->setProperty($selector, 'place-items', $placeItems);
    }
    public function setPlaceContent($selector, $placeContent)
    {
        return $this->setProperty($selector, 'place-content', $placeContent);
    }

    // Lists
    public function setListStyle($selector, $listStyle)
    {
        return $this->setProperty($selector, 'list-style', $listStyle);
    }
    public function setListStyleType($selector, $listStyleType)
    {
        return $this->setProperty($selector, 'list-style-type', $listStyleType);
    }
    public function setListStylePosition($selector, $listStylePosition)
    {
        return $this->setProperty($selector, 'list-style-position', $listStylePosition);
    }
    public function setListStyleImage($selector, $listStyleImage)
    {
        return $this->setProperty($selector, 'list-style-image', $listStyleImage);
    }

    // Tables
    public function setTableLayout($selector, $tableLayout)
    {
        return $this->setProperty($selector, 'table-layout', $tableLayout);
    }
    public function setBorderCollapse($selector, $borderCollapse)
    {
        return $this->setProperty($selector, 'border-collapse', $borderCollapse);
    }
    public function setBorderSpacing($selector, $borderSpacing)
    {
        return $this->setProperty($selector, 'border-spacing', $borderSpacing);
    }
    public function setCaptionSide($selector, $captionSide)
    {
        return $this->setProperty($selector, 'caption-side', $captionSide);
    }
    public function setEmptyCells($selector, $emptyCells)
    {
        return $this->setProperty($selector, 'empty-cells', $emptyCells);
    }

    // Transformations and Transitions
    public function setTransform($selector, $transform)
    {
        return $this->setProperty($selector, 'transform', $transform);
    }
    public function setTransformOrigin($selector, $transformOrigin)
    {
        return $this->setProperty($selector, 'transform-origin', $transformOrigin);
    }
    public function setTransition($selector, $transition)
    {
        return $this->setProperty($selector, 'transition', $transition);
    }
    public function setTransitionProperty($selector, $transitionProperty)
    {
        return $this->setProperty($selector, 'transition-property', $transitionProperty);
    }
    public function setTransitionDuration($selector, $transitionDuration)
    {
        return $this->setProperty($selector, 'transition-duration', $transitionDuration);
    }
    public function setTransitionTimingFunction($selector, $transitionTimingFunction)
    {
        return $this->setProperty($selector, 'transition-timing-function', $transitionTimingFunction);
    }
    public function setTransitionDelay($selector, $transitionDelay)
    {
        return $this->setProperty($selector, 'transition-delay', $transitionDelay);
    }

    // Animation
    public function setAnimation($selector, $animation)
    {
        return $this->setProperty($selector, 'animation', $animation);
    }
    public function setAnimationName($selector, $animationName)
    {
        return $this->setProperty($selector, 'animation-name', $animationName);
    }
    public function setAnimationDuration($selector, $animationDuration)
    {
        return $this->setProperty($selector, 'animation-duration', $animationDuration);
    }
    public function setAnimationTimingFunction($selector, $animationTimingFunction)
    {
        return $this->setProperty($selector, 'animation-timing-function', $animationTimingFunction);
    }
    public function setAnimationDelay($selector, $animationDelay)
    {
        return $this->setProperty($selector, 'animation-delay', $animationDelay);
    }
    public function setAnimationIterationCount($selector, $animationIterationCount)
    {
        return $this->setProperty($selector, 'animation-iteration-count', $animationIterationCount);
    }
    public function setAnimationDirection($selector, $animationDirection)
    {
        return $this->setProperty($selector, 'animation-direction', $animationDirection);
    }
    public function setAnimationFillMode($selector, $animationFillMode)
    {
        return $this->setProperty($selector, 'animation-fill-mode', $animationFillMode);
    }
    public function setAnimationPlayState($selector, $animationPlayState)
    {
        return $this->setProperty($selector, 'animation-play-state', $animationPlayState);
    }

    // Miscellaneous
    public function setOpacity($selector, $opacity)
    {
        return $this->setProperty($selector, 'opacity', $opacity);
    }
    public function setHover($selector, $property, $value)
    {
        return $this->setProperty($selector . ':hover', $property, $value);
    }
    public function setCursor($selector, $cursor)
    {
        return $this->setProperty($selector, 'cursor', $cursor);
    }
    public function setBoxShadow($selector, $boxShadow)
    {
        return $this->setProperty($selector, 'box-shadow', $boxShadow);
    }
    public function setTextOverflow($selector, $textOverflow)
    {
        return $this->setProperty($selector, 'text-overflow', $textOverflow);
    }
    public function setWordWrap($selector, $wordWrap)
    {
        return $this->setProperty($selector, 'word-wrap', $wordWrap);
    }
    public function setResize($selector, $resize)
    {
        return $this->setProperty($selector, 'resize', $resize);
    }
    public function setPointerEvents($selector, $pointerEvents)
    {
        return $this->setProperty($selector, 'pointer-events', $pointerEvents);
    }
    public function setFilter($selector, $filter)
    {
        return $this->setProperty($selector, 'filter', $filter);
    }
    public function setObjectFit($selector, $objectFit)
    {
        return $this->setProperty($selector, 'object-fit', $objectFit);
    }
    public function setObjectPosition($selector, $objectPosition)
    {
        return $this->setProperty($selector, 'object-position', $objectPosition);
    }
    public function setOutline($selector, $outline)
    {
        return $this->setProperty($selector, 'outline', $outline);
    }
    public function setOutlineWidth($selector, $outlineWidth)
    {
        return $this->setProperty($selector, 'outline-width', $outlineWidth);
    }
    public function setOutlineStyle($selector, $outlineStyle)
    {
        return $this->setProperty($selector, 'outline-style', $outlineStyle);
    }
    public function setOutlineColor($selector, $outlineColor)
    {
        return $this->setProperty($selector, 'outline-color', $outlineColor);
    }

    // Pseudo-classes and Pseudo-elements
    public function setPseudoClass($selector, $pseudoClass, $property, $value)
    {
        return $this->setProperty($selector . ':' . $pseudoClass, $property, $value);
    }
    public function setPseudoElement($selector, $pseudoElement, $property, $value)
    {
        return $this->setProperty($selector . '::' . $pseudoElement, $property, $value);
    }

    public function outputCSS($filePath)
    {
        $css = "";
        foreach ($this->styles as $selector => $properties) {
            $css .= "$selector {\n";
            foreach ($properties as $property => $value) {
                $css .= "    $property: $value;\n";
            }
            $css .= "}\n";
        }
        file_put_contents($filePath, $css);
    }
}
