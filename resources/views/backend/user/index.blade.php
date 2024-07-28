<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
          <h2>{{ config('apps.user.title') }}</h2>
          <ol class="breadcrumb" style="margin-bottom:10px;">
              <li class="breadcrumb-item">
                  <a href="{{ route('dashboard.index') }}">Dashboard</a>
              </li>
              <li class="breadcrumb-item active"><strong>{{ config('apps.user.title') }}</strong></li>
          </ol>
      </div>
    </div>
    
    <section class="content mt20">
      <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            <div class="d-flex justify-content-between">
              <h5 class="card-title">{{ config('apps.user.tableHeading') }}</h5>
              @include('backend.user.component.toolbox')
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            @include('backend.user.component.filter')
            @include('backend.user.component.table')
          </div>
          <!-- /.card-body -->
          <div class="card-footer clearfix">
            {{-- phân trang làm ở đây --}}
            {{ $users->links('pagination::bootstrap-4') }}
          </div>
        </div>
      </div>
    </section>

</div>

