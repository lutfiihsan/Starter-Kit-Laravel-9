<?php

namespace App\Repositories\Customer;

interface CustomerDesign {
    public function datatable();
    public function trashedData($id);
    public function restore($id);
    public function deletePermanent($id);
}
