<?php


class ArrayList
{
    public $arrayList;

    public function ArrayList($arr = "")
    {
        if (is_array($arr) == true) {
            $this->arrayList = $arr;
        } else {
            $this->arrayList = array();
        }
    }

    //Thêm 1 phần tử vào mảng
    public function add($obj)
    {
        array_push($this->arrayList, $obj);
    }

    //Xóa tất cả phần tử khỏi danh sách
    public function clear()
    {
        $this->arrayList = array();
    }

    //Trả về phần tử tại vị trí đã chỉ định trong danh sách này
    public function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->arrayList[$index];
        } else {
            die("ERROR in ArrayList.get");
        }
    }

    //Kiểm tra nếu danh sách này ko có phần tử nào
    public function isEmpty()
    {
        if (count($this->arrayList) == 0) {
            return true;
        }
        return false;
    }

    //Loại bỏ phần tử ở vị trí đã chỉ định trong danh sách này
    public function remove($index)
    {
        if ($this->isInteger()) {
            $newArrayList = array();

            for ($i = 0; $i < $this->size(); $i++) {
                if ($index != $i) {
                    $newArrayList[] = $this->get($i);
                    $this->arrayList = $newArrayList;
                } else {
                    die("ERROR in ArrayList.remove <br> Integer value required");
                }
            }
        }
    }

    //Trả về phần tử trong danh sách này
    public function size()
    {
        return count($this->arrayList);
    }

    //Sắp xếp danh sách theo thứ tự bảng chữ cái
    public function sort()
    {
        sort($this->arrayList);
    }

    //Trả về một mảng chứa tất cả các phần tử trong danh sách theo đúng thứ tự
    public function toArray()
    {
        return $this->arrayList;
    }

    //Trả về true nếu tham số chứ một giá trị số nguyên
    public function isInteger($toCheck)
    {
        return preg_match("/^[0-9]+$/", $toCheck);
    }
}

?>