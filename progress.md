Table users{
  id int 
  username varchar
  password varchar
}

Table customers{
  id int 
  int user_id [ref: - users.id]
  nama varchar
  no_telepon varchar
  no_whatsapp varchar
  alamat text
}

Table undangans{
  id int 
  customer_id int [ref: > customers.id]
  title varchar
  url varhcar
  tanggal_hitung_mundur datetime
}

Table undangan_mempelai{
  id int 
  undangan_id int [ref: > undangans.id]
  title varchar
  nama_lengkap varchar
  nama_panggilan varchar
  nama_orang_tua varchar
  sequence int
}

Table undangan_acara{
  id int 
  undangan_id int [ref: > undangans.id]
  nama varchar
  tanggal datetime
  alamat text
  link_google_maps varchar
  sequence int
}

Table undangan_galeri{
  id int 
  undangan_id int [ref: > undangans.id]
  judul varchar
  file varchar
  sequence int
}

Table undangan_dikunjungi{
  id int 
  undangan_id int [ref: > undangans.id]
  kepada varchar
  qty int
}

Table undangan_pesan{
  id int 
  undangan_id int [ref: > undangans.id]
  nama varchar
  pesan text
  keterangan text
  tanggal datetime
}

Table undangan_amplop{
  id int 
  undangan_id int [ref: > undangans.id]
  layanan_id int [ref: - undangan_amplop_layanan.id]
  alamat varchar
  keterangan text
}

Table undangan_amplop_layanan{
  id int 
  nama varchar
  logo text
}

