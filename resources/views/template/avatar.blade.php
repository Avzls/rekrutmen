<div class="avatar bg-light me-3">
    <img src="account.png" alt="">
    <div class="dropdown-menu dropdown-menu-end">
        <a class="dropdown-item" href="#">Profile</a>
        <a class="dropdown-item" href="#">Ganti Password</a>
        <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
    </div>
</div>

<style>
    .avatar {
        position: absolute;
        top: 1;
        right: 100px;
        cursor: pointer;
    }
</style>

<script>
    document.querySelector('.avatar').addEventListener('click', function() {
        document.querySelector('.dropdown-menu').classList.toggle('show');
    });
</script>
