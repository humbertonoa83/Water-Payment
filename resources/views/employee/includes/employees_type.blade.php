<div class="dt-responsive table-responsive">
    <table id="compact" class="table compact table-striped table-bordered nowrap">
        <thead>
        <tr>
            <th>Action</th>
            <th>Nome</th>
            <th>Descricao</th>
        </tr>
        </thead>
        <tbody>

        @foreach($employee_types as $employee_type)
            <tr>
                <td align="center"><a href="/employee-types/{{ $employee_type->id }}/edit"><i class="feather icon-edit"></i></a></td>
                <td>{{$employee_type->name}}</td>
                <td>{{$employee_type->description}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
