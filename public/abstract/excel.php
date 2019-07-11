<?php
/**
 * Interface CSV
 * Trong interface thì chỉ có các method được khai báo
 * mà không được viết code thực thi
 */
interface Excel {
    public function importExcel();
    public function exportExcel();
}
