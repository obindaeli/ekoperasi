<?php

class M_data extends CI_Model{

        public function tampil_data($table)
        {
            return $this->db->get($table);
        }

        public function input_data($table, $data)
        {
            $this->db->insert($table, $data);
        }

        public function hapus_data($where,$table)
        {
            $this->db->where($where);
            $this->db->delete($table);
        }

        public function edit_data($where,$table){
            return $this->db->get_where($table,$where);
        }
        

        public function update_data($where,$data,$table){
            $this->db->where($where);
            $this->db->update($table,$data);
        }

        public function getbyid($id){
            $query=$this->db->query("SELECT `nama_opd` FROM `opd` WHERE `id_opd` ='$id'");
            return $query->result();
        }

        public function viewanggaran()
        {
            $query=$this->db->query("SELECT A.id_opd, A.nama_opd, B.pad, C.dau, D.dak, E.silpa, F.dbhp, G.dif, H.bkp, I.dbhpv from opd A
                                    left join(select id_opd, jumlah as pad from pagu where id_sumber = 1 ) B on A.id_opd = B.id_opd
                                    left join(select id_opd, jumlah as dau from pagu where id_sumber = 2 ) C on A.id_opd = B.id_opd
                                    left join(select id_opd, jumlah as dak from pagu where id_sumber = 3 ) D on A.id_opd = B.id_opd
                                    left join(select id_opd, sum(jumlah) as silpa from pagu where id_sumber = 4 ) E on A.id_opd = B.id_opd
                                    left join(select id_opd, sum(jumlah) as dbhp from pagu where id_sumber = 5 ) F on A.id_opd = B.id_opd
                                    left join(select id_opd, sum(jumlah) as dif from pagu where id_sumber = 6 ) G on A.id_opd = B.id_opd
                                    left join(select id_opd, sum(jumlah) as bkp from pagu where id_sumber = 7 ) H on A.id_opd = B.id_opd
                                    left join(select id_opd, sum(jumlah) as dbhpv from pagu where id_sumber = 8 ) I on A.id_opd = B.id_opd;
                                ");
            return $query->result();
        }

        public function penyerapan($id){
            $query=$this->db->query("SELECT sumber.nama_sumber, opd.nama_opd, SUM(penyerapan.nilai) as nilaipenyerapan, pagu.jumlah as nilaipagu, SUM(pagu.jumlah)-SUM(penyerapan.nilai) AS selisih 
                                        FROM `penyerapan` 
                                        LEFT JOIN sumber ON sumber.id_sumber=penyerapan.id_sumber 
                                        LEFT JOIN opd ON opd.id_opd=penyerapan.id_opd 
                                        LEFT JOIN pagu ON pagu.id_sumber=sumber.id_sumber 
                                        WHERE penyerapan.id_opd ='$id' 
                                        GROUP BY penyerapan.id_sumber;
                                    ");
            return $query->result();
        }

        public function detailanggaran($id){
            $query=$this->db->query("SELECT pagu.id_pagu, sum(pagu.jumlah) as total, sumber.nama_sumber, opd.nama_opd 
                                        FROM `pagu` 
                                        LEFT JOIN opd ON opd.id_opd=pagu.id_opd
                                        LEFT JOIN sumber ON sumber.id_sumber=pagu.id_sumber
                                        WHERE pagu.id_opd='$id' 
                                        GROUP BY pagu.id_sumber");
            return $query->result();
        }

        public function viewpengajuan(){
            $query=$this->db->query("SELECT penyerapan.id_penyerapan AS id_pengajuan, nilai as nilaipengajuan, 
                                    opd.nama_opd, sumber.nama_sumber, penyerapan.status 
                                    FROM `penyerapan` 
                                    LEFT JOIN opd ON opd.id_opd=penyerapan.id_opd 
                                    LEFT JOIN sumber ON sumber.id_sumber=penyerapan.id_sumber");
            return $query->result();
        }

        public function viewkas(){
            $query=$this->db->query("SELECT kas.id_kas, sumber.nama_sumber, kas.pagu, kas.rkud, kas.pagu-kas.rkud AS sisa, 
                                    SUM(penyerapan.nilai) as realisasi 
                                    FROM `kas` 
                                    LEFT JOIN sumber ON sumber.id_sumber=kas.id_sumber 
                                    LEFT JOIN penyerapan ON penyerapan.id_sumber=sumber.id_sumber 
                                    GROUP BY sumber.id_sumber");
            return $query->result();
        }

        public function cekdata($where,$table){
            return $this->db->get_where($table,$where);
        }

        public function cekrkud($id){
            
             return $query->result();
        }

    }

?>