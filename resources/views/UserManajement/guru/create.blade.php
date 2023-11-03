<form action="{{ route('guru.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal fade text-left" id="guruModal" tabindex="-1" role="dialog" aria-labelledby="guruModalLabel">
        <div class="modal-dialog modal-form">
            <div class="modal-content">
                <h5 class="modal-title" id="siswaModalLabel" style="text-align: center; margin-top:5vh;">Add Account Guru</h5>
                <hr>
                <div class="modal-body">
                    <div class="modal-form-item">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="name" placeholder="Cristhoper Jones" required>
                    </div>
                    <div class="modal-form-item">
                        <label for="nisn">NUPTK</label>
                        <input type="text" class="form-control" id="nuptk" name="nuptk" placeholder="123456789" required>
                    </div>
                    <div class="modal-form-item">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="modal-form-item">
                        <label for="confirm_password">Konfirmasi Password</label>
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</form>
@include('sweetalert::alert')

