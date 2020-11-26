<div class="mail-body-content">
    <div class="row input-daterange">
        <div class="col-md-3">
            <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" readonly />
        </div>
        <div class="col-md-3">
            <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" readonly />
        </div>
        <div class="col-md-2">
            <button type="button" name="filter" id="filter" class="btn btn-primary">Filter</button>
        </div>
        <div class="col-md-3">
            <select id="gender" class="form-control">
                <option value="">--Select status--</option>
                <option value="F">F</option>
                <option value="M">M</option>
                <option value="Moçambicana">Moçambicana</option>
            </select>
        </div>
    </div>
    <br />
    <br />
    <div class="dt-responsive table-responsive">
        <table id="all_client_table" class="display nowrap client_all_table" style="width:100%">
            <thead>
            <tr>
                <th>Acção</th>
                <th>Nome</th>
                <th>Apelido</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>gender</th>
                <th>Nacionalidade</th>
            </tr>
            </thead>
            <tbdoby>
                @foreach($clients as $client)
                    <tr>
                        <td align="center"><a href="/clients/{{ $client->id }}/edit"><i class="feather icon-edit"></i></a></td>
                        <td>{{$client->name}}</td>
                        <td>{{$client->surname}}</td>
                        <td>{{$client->telefone}}</td>
                        <td>{{$client->user()->first()->email}}</td>
                        <td>{{$client->gender}}</td>
                        <td>{{$client->nationality}}</td>

                    </tr>
                @endforeach
            </tbdoby>
        </table>
    </div>
</div>
