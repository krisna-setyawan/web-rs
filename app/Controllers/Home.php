<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['nama'] = $this->headerModel->find(1);
        $data['logo'] = $this->headerModel->find(2);

        $data['sc_layanan'] = $this->shortcutMenuModel->find(1);
        $data['sc_dokter'] = $this->shortcutMenuModel->find(2);
        $data['sc_daftaronline'] = $this->shortcutMenuModel->find(3);
        $data['sc_telemedicine'] = $this->shortcutMenuModel->find(4);

        $data['foto_direktur'] = $this->sambutanDirekturModel->find(1);
        $data['sambutan'] = $this->sambutanDirekturModel->find(2);
        $data['nama_direktur'] = $this->sambutanDirekturModel->find(3);

        return view('web-pages/home', $data);
    }
}
