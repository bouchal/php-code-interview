<?php

interface IDataLoader
{
    /**
     * Return array of data arrays
     *
     * @return array
     */
    public function loadData(): array;
}