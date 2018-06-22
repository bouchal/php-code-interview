<?php

interface IPrintFormatter
{
    /**
     * @param array $data
     * @return string
     */
    public function getStringFromData(array $data): string;
}