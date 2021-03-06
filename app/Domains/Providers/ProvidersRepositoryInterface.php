<?php
/**
 * Created by PhpStorm.
 * User: alfjuniorbh
 * Date: 16/10/16
 * Time: 19:59
 */
namespace App\Domains\Providers;

interface ProvidersRepositoryInterface
{
    public function index();
    public function data_table();
    public function all();
    public function searchById();
    public function selectProviders();
    public function findRegister($id);
    public function auto_complete();
    public function combo();
    public function create($status);
    public function store($request);
    public function edit($compact=[]);
    public function update($request);
    public function destroy();
}