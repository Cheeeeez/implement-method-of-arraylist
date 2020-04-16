<?php


class MyList
{
    public $size;
    private $list = [];

    public function __construct()
    {
        $this->size = 0;
    }

    public function insert($index, $element)
    {
        if ($index < 0 || $index > $this->size()) {
            die(" index is out of range");
        }
        $this->list[$index] = $element;
        $this->size++;
    }

    public function remove($index)
    {
        if ($this->isInteger($index)) {
            $newList = [];

            for ($i = 0; $i < $this->size(); $i++) {
                if ($index != $i) {
                    $newList[] = $this->get($i);
                }
            }
            $this->list = $newList;
        } else {
            die("ERROR in MyList.remove <br> Integer value required");
        }
    }

    public function size()
    {
        return count($this->list);
    }

    public function cloneList()
    {
        $newList = [];
        for ($i = 0; $i < $this->size(); $i++) {
            $newList[] = $this->get($i);
        }
        return $newList;
    }

    public function contains($element)
    {
        for ($i = 0; $i < $this->size(); $i++) {
            if ($this->list[$i] == $element) {
                return true;
            }
        }
        return false;
    }

    public function indexOf($element)
    {
        for ($i = 0; $i < $this->size(); $i++) {
            if ($this->list[$i] == $element) {
                return $i;
                break;
            }
        }
        return -1;
    }

    public function add($element)
    {
        $this->list[$this->size()] = $element;
    }

    public function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->list[$index];
        } else {
            die("ERROR in MyList.get");
        }
    }

    public function clear()
    {
        $this->list = [];
    }

    public function isInteger($toCheck)
    {
        return preg_match("/^[0-9]+$/", $toCheck);
    }

    public function getList()
    {
        return $this->list;
    }


}