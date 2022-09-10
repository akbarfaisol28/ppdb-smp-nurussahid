<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\linkModel;

class LinkUjian extends BaseController
{
    protected $linkModel;
    public function __construct()
    {
        $this->linkModel = new linkModel();
    }
    public function index()
    {
        $link = $this->linkModel->findAll();
        $data = [
            'title' => 'ADMIN | LINK UJIAN',
            'link' => $link

        ];
        return view('admin/linkujian', $data);
    }
    public function save()
    {
        $this->linkModel->save([
            'link_ipa' => $this->request->getVar('link_ipa'),
            'link_bhs_indo' => $this->request->getVar('link_bhs_indo'),
            'link_mtk' => $this->request->getVar('link_mtk')

        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/linkujian');
    }
    public function delete($id)
    {
        $this->linkModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus!');
        return redirect()->to('/linkujian');
    }
    public function edit($id)
    {
        $data = [
            'title' => 'ADMIN | EDIT LINK',
            'validation' => \Config\Services::validation(),
            'link' => $this->linkModel->getlink($id)
        ];

        return view('admin/editLink', $data);
    }
    public function update($id)
    {

        $this->linkModel->save([
            'id' => $id,
            'link_ipa' => $this->request->getVar('link_ipa'),
            'link_bhs_indo' => $this->request->getVar('link_bhs_indo'),
            'link_mtk' => $this->request->getVar('link_mtk')
        ]);
        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/linkujian');
    }
}
