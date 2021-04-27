
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">ข้อมูลผู้ใช้งาน</div>
                    <div class="card-body">
                            <div>
                                <x-jet-label for="name" value="Name" /> : {!! $user['name'] !!} <br>
                                <x-jet-label for="email" value="Email" /> : {!! $user['email'] !!} <br>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

