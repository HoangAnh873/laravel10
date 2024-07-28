<table class="table table-bordered">
    <thead>
      <tr>
        <th>
          <input type="checkbox" value="" id="checkAll" class="input-checkbox">
        </th>
        <th>Ảnh</th>
        <th>Họ tên</th>
        <th>Email</th>
        <th>Số dt</th>
        <th>Địa chỉ</th>
        <th class="text-center">Tình trạng</th>
        <th class="text-center">Thao tác</th>
      </tr>
    </thead>
    <tbody>
      @if(isset($users) && is_object($users))
        @foreach($users as $user)
        <tr>
          <td>
            <input type="checkbox" value=""class="input-checkbox checkBoxItem">
          </td>
          <td>
            <span class="image"><img style="width: 90px" src="https://www.thefamouspeople.com/profiles/images/gong-yoo-4.jpg" alt="Ảnh đại diện"></span>
          </td>
          <td>
            {{ $user->name }}
          </td>
          <td>
            {{ $user->email }}
          </td>
          <td>
            {{ $user->phone }}
          </td>
          <td>
            {{ $user->address }}
          </td>
          <td class="text-center">
            <div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" id="customSwitch1">
              <label class="custom-control-label" for="customSwitch1"></label>
            </div>
          </td>
          <td class="text-center">
            <a href="" class="btn btn-success"><i class="fa fa-edit"></i></a>
            <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
          </td>
        </tr>
        @endforeach
      @endif
    </tbody>
  </table>

