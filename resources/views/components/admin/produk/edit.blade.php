<div class="modal-header">
    <h5 class="modal-title">Edit Produk</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form method="post" action="{{ route('admin.update_produk') }}" enctype="multipart/form-data">
    @csrf
    <div class="modal-body">
        <div class="form-group">
            <label for="">Kategori</label>
            <select class="form-select" name="id_kategori" required>
                @foreach($kategori as $r)
                <option value="{{ $r->id }}" {{ $edit->id_kategori == $r->id ? 'selected' : ''}}>{{ $r->nama_kategori }}</option>
                @endforeach
            </select>
            @error("id_kategori")
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group mt-3">
            <label for="">Judul Buku</label>
            <input type="text" class="form-control @error("nama_produk") is-invalid @enderror" value="{{$edit->nama_produk}}" name="nama_produk" id="nama_produk" placeholder="">
        </div>
        <div class="form-group mt-3">
            <label for="">Penulis</label>
            <input type="text" class="form-control @error("penulis") is-invalid @enderror" value="{{$edit->penulis}}" name="penulis" id="penulis" placeholder="">
        </div>
        <div class="form-group mt-3">
            <label for="">Penyunting</label>
            <input type="text" class="form-control @error("penyunting") is-invalid @enderror" value="{{$edit->penyunting}}" name="penyunting" id="penyunting" placeholder="">
        </div>
        <div class="form-group mt-3">
            <label for="">Edisi</label>
            <input type="text" class="form-control @error("edisi") is-invalid @enderror" value="{{$edit->edisi}}" name="edisi" id="edisi" placeholder="">
        </div>
        <div class="form-group mt-3">
            <label for="">Seri</label>
            <input type="text" class="form-control @error("seri") is-invalid @enderror" value="{{$edit->seri}}" name="seri" id="seri" placeholder="">
        </div>
        <div class="form-group mt-3">
            <label for="">Tahun Terbit</label>
            <input type="number" class="form-control @error("thn_terbit") is-invalid @enderror" value="{{$edit->thn_terbit}}" name="thn_terbit" id="thn_terbit" placeholder="">
        </div>
        <div class="form-group mt-3">
            <label for="">Jumlah Halaman</label>
            <input type="number" class="form-control @error("jum_halaman") is-invalid @enderror" value="{{$edit->jum_halaman}}" name="jum_halaman" id="jum_halaman" placeholder="">
        </div>
        <div class="form-group mt-3">
            <label for="">Tinggi Buku</label>
            <input type="text" class="form-control @error("tinggi") is-invalid @enderror" value="{{$edit->tinggi}}" name="tinggi" id="tinggi" placeholder="">
        </div>
        <div class="form-group mt-3">
            <label for="">Kategori Kelompok Pembaca</label>
            <input type="text" class="form-control @error("kategori") is-invalid @enderror" value="{{$edit->kategori}}" name="kategori" id="kategori" placeholder="">
        </div>
        <div class="form-group mt-3">
            <label for="">Jenis Buku</label>
            <input type="text" class="form-control @error("jenis") is-invalid @enderror" value="{{$edit->jenis}}" name="jenis" id="jenis" placeholder="">
        </div>
        <div class="form-group mt-3">
            <label for="">Media</label>
            <input type="text" class="form-control @error("media") is-invalid @enderror" value="{{$edit->media}}" name="media" id="media" placeholder="">
        </div>
        <div class="form-group mt-3">
            <label for="">Kategori Buku</label>
            <input type="text" class="form-control @error("kategori2") is-invalid @enderror" value="{{$edit->kategori2}}" name="kategori2" id="kategori2" placeholder="">
        </div>
        
        <div class="form-group mt-3">
            <label for="">Deskripsi</label>
            <textarea class="form-control @error("deskripsi") is-invalid @enderror" rows="8" name="deskripsi" id="deskripsi" placeholder="">{{$edit->deskripsi}}</textarea>
        </div>
        <div class="form-group mt-3">
            <label for="">Harga jual (cetak)</label>
            <input type="number" class="form-control @error("harga_jual") is-invalid @enderror" value="{{$edit->harga_jual}}" name="harga_jual" id="harga_jual" placeholder="">
        </div>
        <div class="form-group mt-3">
            <label for="">Harga jual (eBook)</label>
            <input type="number" class="form-control @error("harga_jual2") is-invalid @enderror" value="{{$edit->harga_jual2}}" name="harga_jual2" id="harga_jual2" placeholder="">
        </div>
        <div class="form-group mt-3">
            <label for="">Gambar <small class="text-danger ms-1">* Opsional</small></label>
            <input type="file" class="form-control @error("gambar") is-invalid @enderror" value="{{old("gambar")}}" 
                 name="gambar" id="gambar" placeholder="">
            @error("gambar")
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <a href="{{url_images('gambar', $edit->gambar)}}" target="_blank">
                <img src="{{url_images('gambar', $edit->gambar)}}" class="img-fluid mt-3" style="width:80px;">
            </a>
        </div>
        <input type="hidden" value="{{$edit->id}}" name="id">
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>