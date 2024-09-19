@extends("admin.app")
@section("title","會員資料列表")
@section("content")
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.0/dist/sweetalert2.all.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.0/dist/sweetalert2.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script>
    $(function(){
        $("#Level").change(function(){
            // console.log($(this).data("id"));
            console.log($(this).val());
            
        })
    });

    function doDelete(id, Username) {
        Swal.fire({
            title: "確定刪除[" + Username + "] ?",
            showDenyButton: true,
            showCancelButton: false,
            confirmButtonText: "確定",
            denyButtonText: `不刪了`
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "請再次確定是否刪除[" + Username + "] ?",
                    showDenyButton: true,
                    showCancelButton: false,
                    confirmButtonText: "確定要刪除",
                    denyButtonText: "不刪了"
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "/admin/member/delete",
                            type: "post",
                            // dataType: "json",
                            data: {
                                id: id,
                                _token: "{{ csrf_token() }}"
                            },
                            // msg:變數名稱, 不一定要使用msg這個字, 可以自己訂
                            success: function(msg) {
                                if (msg == "OK") {
                                    Swal.fire("已刪除");
                                    $("table tr.user" + id).remove();
                                }
                            }
                        })
                    }
                });
            }
        });
    }

    function changeLevel(id, Level){
        $.ajax({
            type: "POST",
            url: "/admin/member/level",
            data: {
                id: id,
                Level: Level,
                _token: "{{ csrf_token() }}"
            },
            success: function(msg) {
                if (msg == "LEVEL_UPDATE") {
                    Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "會員等級已更新",
                    showConfirmButton: false,
                    timer: 1000
                    });
                }
            }
        });
    }
    
</script>
@if (Session::has("message"))
    <script>
        Swal.fire("{{ Session::get('message') }}");
    </script>
@endif
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- <div class="card-header">
                    <div class="row">
                        <div class="col-2">
                            <a href="javascript:doDelete('list')" class="btn btn-danger">刪除</a>
                        </div>
                    </div>
                </div> -->
                <div class="card-body">
                    <form id="list" name="list" method="post" action="/admin/member/delete">
                    {{ csrf_field() }}
                        <table class="table table-striped table-border border border-dark">
                            <thead>
                                <tr class="table-warning">
                                    <th class="col-1 text-center border border-dark">會員編號</th>
                                    <th class="col-2 text-center border border-dark">會員帳號</th>
                                    <th class="col-2 text-center border border-dark">E-mail</th>
                                    <th class="col-2 text-center border border-dark">會員電話</th>
                                    <th class="col-1 text-center border border-dark">會員狀態</th>
                                    <th class="col-2 text-center border border-dark">會員等級</th>
                                    <th class="col-1 text-center border border-dark">修改</th>
                                    <th class="col-1 text-center border border-dark">刪除</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($list as $data)
                                <tr class="user{{ $data->id }}">
                                    <td class="text-left border border-dark">{{ $data->id }}</td>
                                    <td class="text-left border border-dark">{{ $data->Username }}</td>
                                    <td class="text-left border border-dark">{{ $data->Email }}</td>
                                    <td class="text-left border border-dark">{{ $data->Tel }}</td>
                                    <td class="text-left border border-dark">
                                        <div class="form-switch">
                                            <input type="checkbox" class="form-check-input is-{{ $data->State == "0" ? "in" : "" }}valid" id="switch01" name="switch01"{{ $data->State == "0" ? " checked" : "" }}>
                                            <label class="fw-700 form-check-label{{ $data->State == "0" ? "  text-danger" : " text-success" }}">{{ $data->State == "0" ? "停權" : "啟用" }}</label>
                                        </div>
                                        <!-- {{ $data->State }} -->
                                    </td>
                                    <td class="text-left border border-dark">
                                        <select name="Level" id="Level" class="form-select">
                                            <option value="100"{{ $data->Level == "100" ? " selected" : "" }}>一般會員</option>
                                            <option value="200"{{ $data->Level == "200" ? " selected" : "" }}>高級會員</option>
                                            <option value="300"{{ $data->Level == "300" ? " selected" : "" }}>老主顧</option>
                                            <option value="900"{{ $data->Level == "900" ? " selected" : "" }}>管理員</option>
                                        </select>
                                    </td>
                                    <td class="text-center">
                                        <a href="edit/{{ $data->id }}" class="btn btn-success text-white">修改</a>
                                    </td>
                                    <td class="text-center border border-dark">
                                        <a href="#" class="btn btn-danger" onclick="doDelete('{{ $data->id }}', '{{ $data->Username }}')">刪除</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $list->onEachSide(1)->links() }}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection