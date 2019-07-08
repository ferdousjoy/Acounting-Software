@extends('layouts.dashboard')
@section('content')
<!-- Horizontal navigation-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="content-body">
    <div class="card">
        <div class="card-header">
            <h5>BalanceSheet</h5>
            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
                <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="card-content">
            <div id="notify" class="alert alert-success" style="display:none;">
                <a href="#" class="close" data-dismiss="alert">&times;</a>

                <div class="message"></div>
            </div>
            <div class="card-body">

                <h5 class="title bg-gradient-x-info p-1 white">
                    BasicAccounts                </h5>
                <p>&nbsp;</p>
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Account</th>
                        <th>Balance</th>
                    </tr>
                    </thead>
                    <tbody>
                        
                        @foreach($Basics as $basic)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$basic->name}}</td>
                                <td>{{$basic->account_no}}</td>
                                <td>{{$basic->initial_balance}} $</td>
                            </tr>      
                            @endforeach     
            </tbody>
                    <tfoot>
                    <tr>
                        <th></th>
                        <th></th>

                        <th></th>

                        <th><h3 class="text-xl-left">{{$Basics->sum('initial_balance')}}</h3></th>
                    </tr>
                    </tfoot>
                </table>
                <h5 class="title bg-gradient-x-purple p-1 white">
                    AssetsAccounts                </h5>
                <p>&nbsp;</p>
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Account</th>
                        <th>Balance</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($Assets as $Asset)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$Asset->name}}</td>
                                <td>{{$Asset->account_no}}</td>
                                <td>{{$Asset->initial_balance}} $</td>
                            </tr>      
                            @endforeach 
                    </tbody>
                    <tfoot>
                    <tr>
                        <th></th>
                        <th></th>

                        <th></th>

                        <th><h3 class="text-xl-left">$ {{$Assets->sum('initial_balance')}}</h3></th>
                    </tr>
                    </tfoot>
                </table>

                <h5 class="title bg-gradient-x-danger p-1 white">
                    ExpensesAccounts                </h5>
                <p>&nbsp;</p>
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Account</th>
                        <th>Balance</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($Expensess as $Expenses)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$Expenses->name}}</td>
                                <td>{{$Expenses->account_no}}</td>
                                <td>$ {{$Expenses->initial_balance}}</td>
                            </tr>      
                            @endforeach 
                     </tbody>
                    <tfoot>
                    <tr>
                        <th></th>
                        <th></th>

                        <th></th>

                        <th><h3 class="text-xl-left">$  {{$Expensess->sum('initial_balance')}}</h3></th>
                    </tr>
                    </tfoot>
                </table>

                <h5 class="title bg-gradient-x-success p-1 white">
                    IncomeAccounts                </h5>
                <p>&nbsp;</p>
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Account</th>
                        <th>Balance</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($Incomes as $Income)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$Income->name}}</td>
                                <td>{{$Income->account_no}}</td>
                                <td>$ {{$Income->initial_balance}}</td>
                            </tr>      
                            @endforeach 
                    </tbody>
                    <tfoot>
                    <tr>
                        <th></th>
                        <th></th>

                        <th></th>

                        <th><h3 class="text-xl-left">$ {{$Incomes->sum('initial_balance')}}</h3></th>
                    </tr>
                    </tfoot>
                </table>

                <h5 class="title bg-gradient-x-warning p-1 white">
                    LiabilitiesAccounts                </h5>
                <p>&nbsp;</p>
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Account</th>
                        <th>Balance</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($Liabilities as $Liabilitie)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$Liabilitie->name}}</td>
                                <td>{{$Liabilitie->account_no}}</td>
                                <td>$ {{$Liabilitie->initial_balance}}</td>
                            </tr>      
                            @endforeach 
                     </tbody>
                    <tfoot>
                    <tr>
                        <th></th>
                        <th></th>

                        <th></th>

                        <th><h3 class="text-xl-left">$ {{$Liabilities->sum('initial_balance')}}</h3></th>
                    </tr>
                    </tfoot>
                </table>

                <h5 class="title bg-gradient-x-grey-blue p-1 white">
                    EquityAccounts                </h5>
                <p>&nbsp;</p>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Account</th>
                        <th>Balance</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($Equitys as $Equity)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$Equity->name}}</td>
                                <td>{{$Equity->account_no}}</td>
                                <td>$ {{$Equity->initial_balance}}</td>
                            </tr>      
                     @endforeach 
                     </tbody>
                    <tfoot>
                    <tr>
                        <th></th>
                        <th></th>

                        <th></th>

                        <th><h3 class="text-xl-left">$ {{$Equitys->sum('initial_balance')}}</h3></th>
                    </tr>
                    </tfoot>
                </table>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Type</th>
                        <th>Balance</th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <td>Basic</td>
                        <td>$ {{$Basics->sum('initial_balance')}}</td>

                    </tr>
                    <tr>
                        <td>Assets</td>
                        <td>$ {{$Assets->sum('initial_balance')}}</td>

                    </tr>
                    <tr>
                        <td>Expenses</td>
                        <td>$ {{$Expensess->sum('initial_balance')}}</td>

                    </tr>
                    <tr>
                        <td>Income</td>
                        <td>$ {{$Incomes->sum('initial_balance')}}</td>

                    </tr>
                    <tr>
                        <td>Liabilities</td>
                        <td>$ {{$Liabilities->sum('initial_balance')}}</td>

                    </tr>
                    <tr>
                        <td>Equity</td>
                        <td>$ {{$Equitys->sum('initial_balance')}}</td>

                    </tr>
                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>

            </div>
        </div>
    </div>
  </div>
</div>
</div>
@endsection