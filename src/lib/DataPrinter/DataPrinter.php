<?php

class DataPrinter
{
    /** @var IDataLoader */
    protected $dataLoader;


    /**
     * @var IPrintFormatter
     */
    protected $printFormatter;


    /**
     * @var IPrinter
     */
    protected $printer;

    /**
     * DataPrinter constructor.
     * @param IDataLoader $dataLoader
     * @param IPrintFormatter $printFormatter
     * @param IPrinter $printer
     */
    public function __construct(IDataLoader $dataLoader, IPrintFormatter $printFormatter, IPrinter $printer)
    {
        $this->dataLoader = $dataLoader;
        $this->printFormatter = $printFormatter;
        $this->printer = $printer;
    }

    /**
     * Load and format data through services and then send them to printer output.
     */
    public function printData(): void
    {
        $data = $this->dataLoader->loadData();
        $string = $this->printFormatter->getStringFromData($data);

        $this->printer->printString($string);
    }
}