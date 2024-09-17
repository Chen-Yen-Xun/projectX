@extends("admin.app")
@section("title", "修改會員資料")
@section("content")
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <a href="../list" class="btn btn-secondary">回上頁</a>
            </div>
            <div class="card-body">
                <form method="post" action="../update">
                    <input type="hidden" name="id" value="{{ $member->id }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <label class="col-form-label col-1 text-right">會員帳號</label>
                        <div class="col-6 mb-3">
                            <input type="text" class="form-control" name="Username" value="{{ $member->Username }}" disabled>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-form-label col-1 text-right">E-mail</label>
                        <div class="col-6 mb-3">
                            <input type="text" class="form-control border border-dark" name="Email" value="{{ $member->Email }}" autofocus>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-form-label col-1 text-right">會員電話</label>
                        <div class="col-6 mb-3">
                            <input type="text" class="form-control border border-dark" name="Tel" value="{{ $member->Tel }}">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-form-label col-1 text-right">會員性別</label>
                        <div class="col-1 mb-3">
                            <select name="Gender" id="" class="border border-dark form-select">
                                <option value=""{{ $member->Gender == "" ? " selected" : "" }}></option>
                                <option value="M"{{ $member->Gender == "M" ? " selected" : "" }}>男性</option>
                                <option value="F"{{ $member->Gender == "F" ? " selected" : "" }}>女性</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-form-label col-1 text-right">會員地址</label>
                        <div class="col-11 mb-3">
                            <input type="text" class="form-control border border-dark" name="Address" value="{{ $member->Address }}">
                        </div>
                    </div>
                    <div class="card-body text-center mt-3">
                        <button class="btn btn-primary" type="sumit">確定</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection