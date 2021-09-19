$(function () {
  $(".tombolTambahData").click(function () {
    $("#judulModal").html("Tambah Data Mahasiswa");
    $(".modal-footer button[type=submit]").html("Tambah data");
    $("#nama").val("");
    $("#nrp").val("");
    $("#email").val("");
    $("#jurusan").val("");
    $("#id").val("");
  });

  $(".tampilUbah").click(function () {
    $("#judulModal").html("Ubah Data Mahasiswa");
    $(".modal-footer button[type=submit]").html("Ubah data");
    $(".modal-body form").attr(
      "action",
      "http://localhost/prakweb2021_phpmvc_193040046/public/mahasiswa/ubah"
    );

    const id = $(this).data("id");

    $.ajax({
      url: "http://localhost/prakweb2021_phpmvc_193040046/public/mahasiswa/getUbah",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#nama").val(data.nama);
        $("#nrp").val(data.nrp);
        $("#email").val(data.email);
        $("#jurusan").val(data.jurusan);
        $("#id").val(data.id);
      },
    });
  });
});
