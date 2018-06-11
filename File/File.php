<?php
declare(strict_types=1);

class writeNumber
{

    private $number;
    private $resource;
    private $mode='r+';

    /**
     * writeNumber constructor.
     * @param $number
     */
    public function __construct(int $number)
    {
        $this->setNumber($number);
        $this->write();
    }

    /**
     *
     */
    public function setMode()
    {
        if (filesize('number.txt') == 0 ) {
            $this->mode='r+';
        } else {
            $this->mode='w+';
        }
        echo $this->mode;
    }

    public function setNumber(int $number = 0)
    {
        $this->number=((int)$number) ?? null;
    }

    public function fileOpen()
    {
        $this->setMode();
        $this->resource = fopen('number.txt', $this->mode);
    }

    public function write()
    {
        $this->fileOpen();
        if ($this->mode == 'r+') {
            fwrite($this->resource, "$this->number");
        } else {
            $num = (int)fgets($this->resource);
            $this->number = $this->number + $num;
            fwrite($this->resource, "$this->number");
        }
        $this->fileClose();
    }

    public function fileClose()
    {
        fclose($this->resource);
    }

}
$n='ffff';
if (!is_numeric($n)) {
    echo "Fatal";
} else {
    $a=new writeNumber($n);
}
$b=fopen('number.txt', "r");
echo (int)fgets($b);
fclose($b);