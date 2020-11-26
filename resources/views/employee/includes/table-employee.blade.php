<div class="dt-responsive table-responsive">
    <table id="compact" class="table compact table-striped table-bordered nowrap">
        <thead>
        <tr>
            <th>Action</th>
            <th>Nome</th>
            <th>Tipo de Funcionario</th>
            <th>Email</th>
            <th>Género</th>
            <th>Telefone</th>
        </tr>
        </thead>
        <tbody>

        @foreach($employees as $employee)
            <tr>
                <td align="center"><a href="/employees/{{ $employee->id }}/edit"><i class="feather icon-edit"></i></a></td>
                <td>{{$employee->name}}</td>
                <td>{{$employee->user()->first()->employeeType()->first()->name}}</td>
                <td>{{$employee->email}}</td>
                <td>{{$employee->gender}}</td>
                <td>{{$employee->telefone}}</td>
        @endforeach
        </tbody>
    </table>
</div>
