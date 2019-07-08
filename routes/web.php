<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
//Dashboard
Route::get('dashboard','DashboardController@dashboard')->name('dashboard')->middleware('auth');
//About
Route::get('about','AboutController@about')->name('about')->middleware('auth');
//Account
Route::get('account-statement','AccountController@accountstatement')->name('account_statement')->middleware('auth');
Route::get('account','AccountController@account')->name('account')->middleware('auth');
Route::get('add-account','AccountController@addaccount')->name('add_account')->middleware('auth');
Route::get('fixed-asset','AccountController@fixedasset')->name('fixed_asset')->middleware('auth');
Route::get('investment','AccountController@investment')->name('investment')->middleware('auth');
Route::post('add-account-form','AccountController@addaccountform')->name('add_account_form')->middleware('auth');
Route::get('view-account/{id}','AccountController@viewaccount')->name('view_account')->middleware('auth');
Route::get('edit-account/{id}','AccountController@editaccount')->name('edit_account')->middleware('auth');
Route::put('editaccountr-form','AccountController@editaccountform')->name('edit_account_form')->middleware('auth');
Route::delete('delete-account/{id}','AccountController@deleteaccount')->name('delete_account')->middleware('auth');

Route::post('add-asset-form','AccountController@addassetform')->name('add_asset_form')->middleware('auth');
Route::post('add-invest-form','AccountController@addinvestform')->name('add_invest_form')->middleware('auth');
//add asset in account part
//Bank
Route::get('add-bank','AccountController@addbank')->name('add_bank')->middleware('auth');
Route::post('add-bank-form','AccountController@addbankform')->name('add_bank_form')->middleware('auth');
Route::get('bank-list','AccountController@banklist')->name('bank_list')->middleware('auth');
Route::delete('delete-bank/{id}','AccountController@deletebank')->name('delete_bank')->middleware('auth');
Route::get('bank-balance','AccountController@bankbalance')->name('bank_balance')->middleware('auth');
Route::get('expenses','AccountController@expenses_statements')->name('expenses_statements')->middleware('auth');
Route::get('expenses_list','AccountController@expenses_list')->name('expenses_list')->middleware('auth');
Route::get('vendor_payment','AccountController@vendor_payment')->name('vendor_payment')->middleware('auth');
Route::get('advance_payment','AccountController@advance_payment')->name('advance_payment')->middleware('auth');
Route::get('cheque_collection','AccountController@cheque_collection')->name('cheque_collection')->middleware('auth');



//all edit
Route::post('Update/expenses','SupportController@UpdateExpenses')->name('UpdateIncome2')->middleware('auth');
Route::post('Update/Income','SupportController@UpdateIncome')->name('UpdateIncome')->middleware('auth');
Route::post('editaccont','ProductController@update_account')->name('update_account')->middleware('auth');
Route::post('editasset','ProductController@update_asset')->name('update_asset')->middleware('auth');
Route::post('editinvest','ProductController@update_invest')->name('update_invest')->middleware('auth');
//all edit

//Balance
Route::get('balance-summary','BalanceController@balancesummary')->name('balance_summary')->middleware('auth');


//Profile
Route::get('profile','ProfileController@profile')->name('profile')->middleware('auth');
//Log
Route::get('log-data','LogController@logdata')->name('log_data')->middleware('auth');
//Debug
Route::get('debug-set','DebugController@debugset')->name('debug_set')->middleware('auth');
//Email Sms
Route::get('auto-mail-sms-setting','EmailSmsController@automailsmssetting')->name('auto_mail_sms_setting')->middleware('auth');
Route::get('misc-automail','EmailSmsController@misc_automail')->name('misc_automail')->middleware('auth');
Route::get('email-template','EmailSmsController@emailtemplate')->name('email_template')->middleware('auth');
Route::get('sms-message','EmailSmsController@smsmessage')->name('sms_message')->middleware('auth');
//Company
Route::get('company','CompanyController@company')->name('company')->middleware('auth');
Route::put('edit-company-form','CompanyController@editcompanyform')->name('edit_company_form')->middleware('auth');
//Commission
Route::get('commission','CommissionController@commission')->name('commission')->middleware('auth');
//Register
Route::get('add-register','RegisterController@addregister')->name('add_register')->middleware('auth');
Route::get('register-page','RegisterController@registerpage')->name('register_page')->middleware('auth');
Route::get('crm-register','RegisterController@crmregister')->name('crm_register')->middleware('auth');
//Attendance
Route::get('admin-attendance','AttendanceController@adminattendance')->name('admin_attendance')->middleware('auth');
Route::get('attendance','AttendanceController@attendance')->name('attendance')->middleware('auth');
Route::get('auto-attendance','AttendanceController@autoattendance')->name('auto_attendance')->middleware('auth');
//Category
Route::get('category','CategoryController@category')->name('category')->middleware('auth');
//Client
Route::get('clients','ClientController@clients')->name('clients')->middleware('auth');
Route::get('create-client','ClientController@createclient')->name('create_client')->middleware('auth');
Route::post('add-client-form-invoice','ClientController@addclientforminvoice')->name('add_client_form_invoice')->middleware('auth');
Route::post('add-client-form-quote','ClientController@addclientformquote')->name('add_client_form_quote')->middleware('auth');
Route::post('add-client-form-subscription','ClientController@addclientformsubscription')->name('add_client_form_subscription')->middleware('auth');
//Client Group
Route::get('client-group','ClientController@clientgroup')->name('client_group')->middleware('auth');
Route::get('add-client-group','ClientController@addclientgroup')->name('add_client_group')->middleware('auth');
Route::post('add-client-group-form','ClientController@addclientgroupform')->name('add_client_group_form')->middleware('auth');
Route::get('edit-group/{id}','ClientController@editgroup')->name('edit_group')->middleware('auth');
Route::put('edit-group-form','ClientController@editgroupform')->name('edit_groupr_form')->middleware('auth');
Route::delete('delete-group/{id}','ClientController@deletegroup')->name('delete_group')->middleware('auth');

//Customer
// Route::get('create-customer','CustomerController@createcustomer')->name('create_customer')->middleware('auth');
// Route::post('create-customer_form','CustomerController@createcustomerform')->name('create_customer_form')->middleware('auth');
// Route::get('cutomer-statement','CustomerController@customerstatement')->name('cutomer_statement')->middleware('auth');
// Route::get('customer','CustomerController@customer')->name('customer')->middleware('auth');
// Route::get('customers','CustomerController@customers')->name('customers')->middleware('auth');
// Route::get('view-customer/{id}','CustomerController@viewcustomer')->name('view_customer')->middleware('auth');
// Route::get('edit-customer/{id}','CustomerController@editcustomer')->name('edit_customer')->middleware('auth');
// Route::put('edit-customer-form','CustomerController@editcustomerform')->name('edit_customer_form')->middleware('auth');
// Route::delete('delete-customer/{id}','CustomerController@deletecustomer')->name('delete_customer')->middleware('auth');
// Route::get('customer-report','CustomerController@customerreport')->name('customer_report')->middleware('auth');
// Route::post('update-customer','CustomerController@updatecustomer')->name('update_customer')->middleware('auth');

//Custom
Route::get('custom-form-setting','CustomController@customformsetting')->name('custom_form_setting')->middleware('auth');



//Product
Route::get('products','ProductController@products')->name('products')->middleware('auth');
Route::get('vendor/add','ProductController@products2')->name('products')->middleware('auth');
Route::post('units','ProductController@units')->name('unit.submit')->middleware('auth');
Route::get('/deleteunit/{id}','ProductController@deleteunit')->name('deleteunit')->middleware('auth');
Route::get('edit/product/{id}','ProductController@editproduct')->name('edit/product')->middleware('auth');
Route::post('update/product','ProductController@updateproduct')->name('update/product')->middleware('auth');

Route::get('edit/vendor/{id}','ProductController@editvendor')->name('edit_vendor')->middleware('auth');


Route::post('update/vendor','ProductController@updatevendor')->name('updatevendor')->middleware('auth');








// All delete function
Route::get('/deleteaccount/{id}','ProductController@deleteaccount')->name('deleteunit')->middleware('auth');
Route::get('/deleteasset/{id}','ProductController@deleteasset')->name('deleteasset')->middleware('auth');
Route::get('/deleteinvest/{id}','ProductController@deleteinvest')->name('deleteinvest')->middleware('auth');

Route::post('editunits','ProductController@update_units')->name('update_units')->middleware('auth');
Route::get('add-product','ProductController@addproduct')->name('add_product')->middleware('auth');
Route::get('add-product2','ProductController@addproduct2')->name('add_product2')->middleware('auth');
// add product for sales
Route::get('add/buy/product','ProductController@addbuyproduct')->name('add_buy_product')->middleware('auth');
Route::post('insert/buy/product','ProductController@insertbuyproduct')->name('insert_buy_product')->middleware('auth');

Route::get('viewProduct2','ProductController@viewProduct2')->name('viewProduct2')->middleware('auth');

Route::post('/getshiplist','ProductController@getshiplist')->name('getshiplist')->middleware('auth');
Route::post('/getlist','ProductController@getlist')->name('getlist')->middleware('auth');
Route::post('/getajaxproduct','ProductController@getAjaxProduct')->name('ajaxproduct')->middleware('auth');

Route::post('/getcitylist','ProductController@getcitylist')->name('getcitylist')->middleware('auth');
Route::post('/getcitylist2','ProductController@getcitylist2')->name('getcitylist2')->middleware('auth');

Route::post('/getcmrproducts','ProductController@getProductsByPoNo')->name('getcmrproducts')->middleware('auth');

Route::post('/getcitylist3','ProductController@getcitylist3')->name('getcitylist3')->middleware('auth');

Route::post('/productlist','ProductController@productlist')->name('productlist')->middleware('auth');
Route::post('/getaddress','ProductController@getaddress')->name('getaddress')->middleware('auth');

Route::post('product-add-form','ProductController@productaddform')->name('product_add_form')->middleware('auth');
Route::post('product-add-form2','ProductController@productaddform2')->name('product_add_form2')->middleware('auth');
Route::get('view-product/{id}','ProductController@viewproduct')->name('view_product')->middleware('auth');
Route::get('edit-product/{id}','ProductController@editproduct')->name('edit_product')->middleware('auth');
Route::put('edit-product-form','ProductController@editproductform')->name('edit_product_form')->middleware('auth');
Route::delete('delete-product/{id}','ProductController@deleteproduct')->name('delete_product')->middleware('auth');
Route::get('product-category','ProductController@productcategory')->name('product_category')->middleware('auth');
Route::get('product-category-graphical','ProductController@productcat')->name('product_cat')->middleware('auth');
Route::get('add-product-category','ProductController@addproductcategory')->name('add_product_category')->middleware('auth');
Route::post('add-product-category-form','ProductController@addproductcategoryform')->name('add_product_category_form')->middleware('auth');
Route::get('edit-product-category/{id}','ProductController@editproductcategory')->name('edit_product_category')->middleware('auth');
Route::put('edit-product-category-form','ProductController@editproductcategoryform')->name('edit_product_category_form')->middleware('auth');
Route::delete('delete-product-category/{id}','ProductController@deleteproductcategory')->name('delete_product_category')->middleware('auth');
Route::get('product-as-service-setting','ProductController@productasservicesetting')->name('product_as_service_setting')->middleware('auth');
Route::get('products-statement','ProductController@productsstatement')->name('products_statement')->middleware('auth');
Route::get('trending-products','ProductController@trending_products')->name('trending_products')->middleware('auth');
Route::get('product-measurement','ProductController@productmeasurement')->name('product_measurement')->middleware('auth');
Route::get('product-variation','ProductController@productvariation')->name('product_variation')->middleware('auth');
Route::get('product-variable','ProductController@productvariable')->name('product_variable')->middleware('auth');
//Project
Route::get('add-project','ProjectController@addproject')->name('add_project')->middleware('auth');
Route::post('add-project-form','ProjectController@addprojectform')->name('add_project_form')->middleware('auth');
Route::get('edit-project/{id}','ProjectController@editproject')->name('edit_project')->middleware('auth');
Route::put('edit-project-form','ProjectController@editprojectform')->name('edit_project_form')->middleware('auth');
Route::delete('delete_project/{id}','ProjectController@destroy')->name('delete_project')->middleware('auth');
Route::get('project-list','ProjectController@projectlist')->name('project_list')->middleware('auth');
//Promo
Route::get('add-promo','PromoController@addpromo')->name('add_promo')->middleware('auth');
Route::post('add-promo-form','PromoController@addpromoform')->name('add_promo_form')->middleware('auth');
Route::get('promo','PromoController@promo')->name('promo')->middleware('auth');
Route::delete('delete-promo/{id}','PromoController@deletepromo')->name('delete_promo')->middleware('auth');
//Transaction
Route::get('add-transaction','TransactionController@addtransaction')->name('add_transaction')->middleware('auth');
Route::post('add-transaction-form','TransactionController@addtransactiondorm')->name('add_transaction_form')->middleware('auth');
Route::get('transaction','TransactionController@transaction')->name('transaction')->middleware('auth');
Route::delete('delete-transaction/{id}','TransactionController@deletetransaction')->name('delete_transaction')->middleware('auth');
//Billing
Route::get('billing-terms','BillingController@billingterms')->name('billing_terms')->middleware('auth');
//Supplier
Route::get('create-supplier','SupplierController@createsupplier')->name('create_supplier')->middleware('auth');
Route::post('add-supplier-form','SupplierController@addsupplierform')->name('add_supplier_form')->middleware('auth');
Route::get('edit-supplier/{id}','SupplierController@editsupplier')->name('edit_supplier');
Route::put('edit-supplier-form','SupplierController@editsupplierform')->name('edit_supplier_form')->middleware('auth');
Route::get('view-supplier/{id}','SupplierController@viewsupplier')->name('view_supplier')->middleware('auth');
Route::delete('delete-supplier/{id}','SupplierController@deletesupplier')->name('delete_supplier')->middleware('auth');
Route::get('supplier-statement','SupplierController@supplierstatement')->name('supplier_statement')->middleware('auth');
Route::get('supplier','SupplierController@supplier')->name('supplier')->middleware('auth');
//Create
Route::get('create','CreateController@create')->name('create')->middleware('auth');
//CronJob
Route::get('cron-job-panel','CronJobController@cronjobpanel')->name('cron_job_panel')->middleware('auth');
//Currency
Route::get('currency-setting','CurrencyController@currencysetting')->name('currency_setting')->middleware('auth');
Route::get('currency','CurrencyController@currency')->name('currency');
Route::get('currency-exchange','CurrencyController@currencyexchange')->name('currency_exchange')->middleware('auth');
Route::get('bank-account','CurrencyController@bankaccount')->name('bank_account')->middleware('auth');
//Setting
Route::get('date-time-setting','SettingController@datetimesetting')->name('date_time_setting')->middleware('auth');
Route::get('theme-setting','SettingController@themesetting')->name('theme_setting')->middleware('auth');
Route::get('billing-and-tex-setting','BillingController@billingandtexsetting')->name('billing_and_tex_setting')->middleware('auth');
Route::get('prefix-setting','SettingController@prefixsetting')->name('prefix_setting')->middleware('auth');
Route::get('language-setting','SettingController@languagesetting')->name('language_setting')->middleware('auth');
Route::get('invoice-setting','SettingController@invoicesetting')->name('invoice_setting')->middleware('auth');
//BackUp
Route::get('db-backup','BackUpController@dbbackup')->name('db_backup')->middleware('auth');
//Ware
Route::get('warehouse','WareController@warehouse')->name('warehouse')->middleware('auth');
Route::get('warehouse-add','WareController@warehouseadd')->name('warehouse_add')->middleware('auth');
Route::post('warehouse-add-form','WareController@warehouseaddform')->name('warehouse_add_form')->middleware('auth');
Route::get('default-ware-house','WareController@defaultwarehouse')->name('default_ware_house')->middleware('auth');
Route::delete('delete-warehouse/{id}','WareController@deletewarehouse')->name('delete_warehouse')->middleware('auth');
//Department
Route::get('departments','DepartmentController@departments')->name('departments')->middleware('auth');
Route::get('add-departments','DepartmentController@adddepartments')->name('add_departments')->middleware('auth');
Route::post('add-departments-form','DepartmentController@adddepartmentsform')->name('add_departments_form')->middleware('auth');
Route::get('edit_departments/{id}','DepartmentController@editdepartments')->name('edit_departments')->middleware('auth');
Route::put('edit-departments-form','DepartmentController@editdepartmentsform')->name('edit_departments_form')->middleware('auth');
Route::delete('delete-departments/{id}','DepartmentController@deletedepartments')->name('delete_departments')->middleware('auth');
//Shipping
Route::get('discount-and-shipping','ShippingController@discountandshipping')->name('discount_and_shipping')->middleware('auth');
//Document
Route::get('document','DocumentController@document')->name('document')->middleware('auth');
//Dual
Route::get('dual-setting','DualController@dualsetting')->name('dual_setting')->middleware('auth');
//Employee
Route::get('employee-payroll-transactions','EmployeeController@employeepayrolltransactions')->name('employee_payroll_transactions')->middleware('auth');
Route::get('employee-permission','EmployeeController@employeepermission')->name('employee_permission')->middleware('auth');
Route::get('employees-list','EmployeeController@employeeslist')->name('employees_list')->middleware('auth');
Route::get('add-employees-list','EmployeeController@addemployeeslist')->name('add_employees_list');
Route::post('add-employees-list-form','EmployeeController@addemployeeslistform')->name('add_employees_list_form')->middleware('auth');
Route::get('view-employee/{id}','EmployeeController@viewemployee')->name('view_employee')->middleware('auth');
Route::delete('delete-employee/{id}','EmployeeController@deleteemployee')->name('delete_employee')->middleware('auth');
Route::get('employees-salaries','EmployeeController@employeessalaries')->name('employees_salaries')->middleware('auth');
//roles
Route::get('add/role','EmployeeController@role')->name('role')->middleware('auth');
Route::post('insert/role','EmployeeController@insertrole')->name('add_role')->middleware('auth');
//change password_confirmation
Route::get('changepassword','EmployeeController@ChangePasswordForm')->name('ChangePasswordForm')->middleware('auth');
Route::post('change/password','EmployeeController@ChangePassword')->name('ChangePassword')->middleware('auth');
//user aDD
Route::get('user','EmployeeController@user')->name('UserForm')->middleware('auth');
Route::post('user','EmployeeController@useradd')->name('adduser')->middleware('auth');
Route::get('user/profile','EmployeeController@userprofile')->name('userprofile')->middleware('auth');
//Report
Route::get('expense-report','ReportController@expensereport')->name('expense_report')->middleware('auth');
Route::get('income-roports','ReportController@incomeroports')->name('income_roports')->middleware('auth');
Route::get('profit-reports','ReportController@profitreports')->name('profit_reports')->middleware('auth');
Route::get('sale-reports','ReportController@salereport')->name('sale_reports')->middleware('auth');
Route::get('deposit-reports','ReportController@depositreport')->name('deposit_reports')->middleware('auth');
Route::get('payment-reports','ReportController@paymentreport')->name('payment_reports')->middleware('auth');
Route::get('event','ReportController@event')->name('event')->middleware('auth');
//Expence
Route::get('expense-transaction','ExpenseController@expensetransaction')->name('expense_transaction')->middleware('auth');
Route::delete('expense-transaction-delete/{id}','ExpenseController@expensetransactiondelete')->name('expens_transaction_delete')->middleware('auth');
Route::get('expense-statement','ExpenseController@expensestatement')->name('expense_statement')->middleware('auth');


//----------------------
Route::post('add-expense-form','ExpenseController@addexpenseform')->name('add_expense_form')->middleware('auth');
Route::post('add-vendorstatement-form','ExpenseController@addvendorstatementform')->name('add_vendorstatement_form')->middleware('auth');
Route::post('add-advance-payment-form','ExpenseController@addadvancepaymentform')->name('add_advancepayment_form')->middleware('auth');












//Export
Route::get('export-crm-data','ExportController@exportcrmdata')->name('export_crm_data')->middleware('auth');
Route::get('export-products','ExportController@exportproducts')->name('export_products')->middleware('auth');
Route::get('export-transactions-account','ExportController@exporttransactionsaccount')->name('export_transactions_account')->middleware('auth');
Route::get('export-transactions','ExportController@exporttransactions')->name('export_transactions')->middleware('auth');
//Pos
Route::get('pos-styleseting','PostController@pos_styleseting')->name('pos_styleseting')->middleware('auth');
//Payment
Route::get('pos','PosController@pos')->name('pos')->middleware('auth');
Route::get('payment','PosController@payment')->name('payment')->middleware('auth');
//Holiday
Route::get('holidays','HolidayController@holidays')->name('holidays')->middleware('auth');
Route::get('admin-holidays','HolidayController@adminholidays')->name('admin_holidays')->middleware('auth');
//Import
Route::get('import-procucts-customer','ImportController@importprocuctscustomer')->name('import_procucts_customer')->middleware('auth');
Route::get('import-products','ImportController@importproducts')->name('import_products')->middleware('auth');
//Income
Route::get('income-statement','IncomeController@incomestatement')->name('income_statement')->middleware('auth');
Route::get('income-transaction','IncomeController@incometransaction')->name('income_transaction')->middleware('auth');
Route::delete('income-transaction-delete/{id}','IncomeController@incometransactiondelete')->name('income_transaction_delete')->middleware('auth');
Route::get('income-vs-expense','IncomeController@incomevsexpense')->name('income_vs_expense')->middleware('auth');
//Location
Route::get('locations','LocationController@locations')->name('location')->middleware('auth');
//Manage

//Subscriptions
Route::get('subscriptions','SubscriptionController@subscriptions')->name('subscriptions')->middleware('auth');
Route::get('new-subscription','SubscriptionController@newsubscription')->name('new_subscription')->middleware('auth');
Route::post('new-subscription-form','SubscriptionController@newsubscriptionform')->name('new_subscription_form')->middleware('auth');
Route::get('view-subscription/{id}','SubscriptionController@viewsubscription')->name('view_subscription')->middleware('auth');
Route::get('edit-subscription/{id}','SubscriptionController@editsubscription')->name('edit_subscription')->middleware('auth');
Route::put('edit-subscription-form','SubscriptionController@editsubscriptionform')->name('edit_subscription_form')->middleware('auth');
Route::delete('delete-subscription/{id}','SubscriptionController@deletesubscription')->name('delete_subscription')->middleware('auth');
Route::get('/getPo/{id}','SubscriptionController@get_po')->name('get_po')->middleware('auth');



Route::middleware(['auth'])->group(function () {
  //Quotations

  Route::get('quotations/{quotation}/pdf','QuotationController@pdf')->name('quotations.pdf');
  Route::post('quotations/getAjaxProduct','QuotationController@getAjaxProduct')->name('quotations.getAjaxProduct');
  Route::resource('quotations', 'QuotationController');


  //Pos

  Route::post('pos/getshiplist','PoController@getShippingList')->name('pos.getshiplist');
  Route::post('pos/getAjaxProduct','PoController@getAjaxProduct')->name('pos.getAjaxProduct');
  Route::resource('pos', 'PoController');

  //Challans
  Route::post('challans/getPoAndShiping','ChallanController@getPoAndShiping')->name('challans.poAndShiping');
  Route::resource('challans', 'ChallanController');





  //Customers
  Route::post('customers/getcitylist','CustomerController@getCityList')->name('getcitylist');
  Route::post('customers/getstatelist','CustomerController@getStateList')->name('getstatelist');
  Route::resource('customers', 'CustomerController');













});



// Route::put('edit-challan-form','ChallanController@editinvoiceform')->name('edit_invoice_form')->middleware('auth');
// Route::delete('delete-challan/{id}','ChallanController@deleteinvoice')->name('delete_invoice')->middleware('auth');
// Route::get('new-challan','ChallanController@newinvoice')->name('new_invoice')->middleware('auth');
// Route::post('new-challan-form','ChallanController@newinvoiceform')->name('new_invoice_form')->middleware('auth');
// Route::get('update/quotion/{id}','ChallanController@updatequotion')->name('updatequotion')->middleware('auth');
// Route::get('pos-challan','ChallanController@pos_invoices')->name('pos_invoices')->middleware('auth');
// Route::get('viewchallan','ChallanController@viewinvoice')->name('viewinvoice')->middleware('auth');
// Route::get('estimate-create','ChallanController@pos_invoicescreate')->name('pos_invoices_create')->middleware('auth');
// Route::post('estimate-create-form','ChallanController@pos_invoicescreateform')->name('estimate_create_form')->middleware('auth');
// Route::post('estimate-update-form','ChallanController@updatequotionform')->name('updatequotionform')->middleware('auth');
// Route::get('view-pos-challan/{id}','ChallanController@viewposinvoices')->name('view_pos_invoices')->middleware('auth');
// Route::delete('delete-pos-challan/{id}','ChallanController@deleteposinvoices')->name('delete_pos_invoices')->middleware('auth');
// Route::get('delete-pos-challan22/{id}','ChallanController@deleteposinvoices22')->name('delete_pos_invoices22')->middleware('auth');
// Route::get('delete-pos-challan222/{id}','ChallanController@deleteposinvoices222')->name('delete_pos_invoices222')->middleware('auth');
//
// Route::get('/delete/product/{product_id}','ChallanController@productdelete')->name('delete_pos_invoices2')->middleware('auth');
// Route::post('update/challan','ChallanController@updatechallan')->name('updatechallan')->middleware('auth');
// //Print
// Route::get('print/{id}','ChallanController@print')->name('print')->middleware('auth');



//Invoice
//Route::post('/update/challan','SupportController@challanupdate')->name('challanupdate')->middleware('auth');
Route::get('invoices','InvoiceController@invoices')->name('invoices')->middleware('auth');
Route::get('view-invoice/{id}','InvoiceController@viewinvoice')->name('view_invoice')->middleware('auth');
Route::get('view-chalan/{id}','InvoiceController@viewchalan')->name('view_chalan')->middleware('auth');
//Route::get('edit-invoice/{id}','InvoiceController@editinvoice')->name('edit_invoice')->middleware('auth');
Route::get('/edit/challan/{product_id}','InvoiceController@challanedit')->name('edit_invoice')->middleware('auth');
Route::post('update-challan','InvoiceController@updatechallan2')->middleware('auth');


Route::put('edit-invoice-form','InvoiceController@editinvoiceform')->name('edit_invoice_form')->middleware('auth');
Route::delete('delete-invoice/{id}','InvoiceController@deleteinvoice')->name('delete_invoice')->middleware('auth');
Route::get('new-invoice','InvoiceController@newinvoice')->name('new_invoice')->middleware('auth');
Route::post('new-invoice-form','InvoiceController@newinvoiceform')->name('new_invoice_form')->middleware('auth');
Route::get('update/quotion/{id}','InvoiceController@updatequotion')->name('updatequotion')->middleware('auth');
Route::get('pos-invoices','InvoiceController@pos_invoices')->name('pos_invoices')->middleware('auth');
Route::get('viewinvoice','InvoiceController@viewinvoice')->name('viewinvoice')->middleware('auth');
Route::get('estimate-create','InvoiceController@pos_invoicescreate')->name('pos_invoices_create')->middleware('auth');
Route::post('estimate-create-form','InvoiceController@pos_invoicescreateform')->name('estimate_create_form')->middleware('auth');
Route::post('estimate-update-form','InvoiceController@updatequotionform')->name('updatequotionform')->middleware('auth');
Route::get('view-pos-invoices/{id}','InvoiceController@viewposinvoices')->name('view_pos_invoices')->middleware('auth');
Route::delete('delete-pos-invoices/{id}','InvoiceController@deleteposinvoices')->name('delete_pos_invoices')->middleware('auth');
Route::get('delete-pos-invoices22/{id}','InvoiceController@deleteposinvoices22')->name('delete_pos_invoices22')->middleware('auth');
Route::get('delete-pos-invoices222/{id}','InvoiceController@deleteposinvoices222')->name('delete_pos_invoices222')->middleware('auth');

Route::get('/delete/product/{product_id}','InvoiceController@productdelete')->name('delete_pos_invoices2')->middleware('auth');
Route::post('update/challan','InvoiceController@updatechallan')->name('updatechallan')->middleware('auth');
//Print
Route::get('print/{id}','InvoiceController@print')->name('print')->middleware('auth');










//Quote
Route::get('quote/list/{id}','QuoteController@quotelist')->name('quotelist')->middleware('auth');
Route::post('quote/update','QuoteController@quoteupdate')->name('quoteupdate')->middleware('auth');
Route::get('quotes','QuoteController@quotes')->name('quotes')->middleware('auth');
Route::get('new-quote','QuoteController@newquote')->name('new_quote')->middleware('auth');
Route::post('new-quote-form','QuoteController@newquoteform')->name('new_quote_form')->middleware('auth');
Route::get('view-quote/{id}','QuoteController@viewquote')->name('view_quote')->middleware('auth');
Route::get('edit-quote/{id}','QuoteController@editquote')->name('edit_quote')->middleware('auth');
Route::put('edit-quote-form','QuoteController@editquoteform')->name('edit_quote_form')->middleware('auth');
Route::delete('delete-quote/{id}','QuoteController@deletequote')->name('delete_quote')->middleware('auth');

Route::post('/getPoByUserId','QuoteController@getPoByUserId')->name('getPoByUserId')->middleware('auth');
Route::post('/getChallanByPo','QuoteController@getChallanByPo')->name('getChallanByPo')->middleware('auth');

//Search
Route::get('/search','InvoiceController@search')->name('search')->middleware('auth');
Route::get('/search-quote','QuoteController@search')->name('search_quote')->middleware('auth');
Route::get('/search-subscription','SubscriptionController@search')->name('search_subscription')->middleware('auth');
Route::get('/search-creditnote','NoteController@search')->name('search_creditnote')->middleware('auth');
Route::get('/search-purches','purchesController@search')->name('search_purches')->middleware('auth');
Route::get('/search-supplier-record','StockController@search')->name('search_supplier_record')->middleware('auth');
Route::get('/search-customer-record','StockController@searchcsutomer')->name('search_customer_record')->middleware('auth');
Route::get('/search-customer-pos','InvoiceController@searchcustomerpos')->name('search_customer_pos')->middleware('auth');
Route::get('/search-customer-supplier','TransactionController@searchcustomersupplier')->name('search_customer_supplier')->middleware('auth');

//purchase
Route::get('new-purchase','purchesController@newpurchase')->name('new_purchase')->middleware('auth');
Route::post('insert/purchase','purchesController@insertpurchase')->name('insert.purchase')->middleware('auth');
Route::get('purchase','purchesController@listpurchase')->name('purchase.list')->middleware('auth');
//purches go po setup
Route::get('new-purches','purchesController@newpurches')->name('new_purches')->middleware('auth');
Route::get('purches','purchesController@purches')->name('purches')->middleware('auth');
Route::post('new-purches-form','purchesController@newpurchesform')->name('new_purches_form')->middleware('auth');
Route::get('view-purches/{id}','purchesController@viewpurches')->name('view_purches')->middleware('auth');
Route::get('edit-purches/{id}','purchesController@editpurches')->name('edit_purches')->middleware('auth');
Route::post('update/po','purchesController@updatepo')->name('updatepo')->middleware('auth');
Route::put('edit-purches-form','purchesController@editpurchesform')->name('edit_purches_form')->middleware('auth');
Route::delete('delete-purches/{id}','purchesController@deletepurches')->name('delete_purches')->middleware('auth');
Route::delete('delete-purchespo/{id}','purchesController@deletepurchespo')->name('delete_purchespo')->middleware('auth');
Route::delete('delete-purches2/{id}','purchesController@deletepurches2')->name('delete_purches2')->middleware('auth');
Route::delete('delete-purches3/{id}','purchesController@deletepurches3')->name('delete_purches3')->middleware('auth');

//Statement
Route::get('Statement-purches/','purchesController@satementpurches')->name('Statement_purches')->middleware('auth');

Route::get('create-bill','purchesController@createbill')->name('create_bill')->middleware('auth');
Route::get('bill-list','purchesController@bills')->name('bills')->middleware('auth');

Route::get('create-vendor','purchesController@createvendor')->name('create_vendor')->middleware('auth');
Route::get('vendor-list','purchesController@vendor')->name('vendor')->middleware('auth');
//Transfer
Route::get('new-transfer','TransferController@newtransfer')->name('new_transfer')->middleware('auth');
//Note
Route::get('notes','NoteController@notes')->name('notes')->middleware('auth');
Route::get('add_notes','NoteController@addnotes')->name('add_notes')->middleware('auth');
Route::post('notes-form','NoteController@notesform')->name('notes_form')->middleware('auth');
Route::get('view-notes/{id}','NoteController@viewnotes')->name('view_notes')->middleware('auth');
Route::put('edit-notes-form/{id}','NoteController@editnotesform')->name('edit_notes')->middleware('auth');
Route::delete('delete-notes','NoteController@deletenotes')->name('delete_note')->middleware('auth');
Route::get('credit-notes','NoteController@creditnotes')->name('credit_notes')->middleware('auth');
Route::get('new-creditnotes','NoteController@newcreditnotes')->name('new_creditnotes')->middleware('auth');
Route::post('new-creditnotes-form','NoteController@newcreditnotesform')->name('new_creditnotes_form')->middleware('auth');
Route::get('view-creditnotes/{id}','NoteController@viewcreditnotes')->name('view_creditnotes')->middleware('auth');
Route::get('edit-creditnotes/{id}','NoteController@editcreditnotes')->name('edit_creditnotes')->middleware('auth');
Route::put('edit-creditnotes-form','NoteController@editcreditnotesform')->name('edit_creditnotes_form')->middleware('auth');
Route::delete('delete-creditnotes/{id}','NoteController@deletecreditnotes')->name('delete_creditnotes')->middleware('auth');
//Profit
Route::get('profit-statement','ProfitController@profitstatement')->name('profit_statement')->middleware('auth');
//Api
Route::get('rest-api-keys','ApiController@restapikeys')->name('rest_api_keys')->middleware('auth');
//Sale
Route::get('sales-statement','SaleController@salesstatement')->name('sales_statement')->middleware('auth');
//Set
Route::get('set-goals','SetController@setgoals')->name('set_goals')->middleware('auth');
//Smt
Route::get('smt-pc-onfig-email','SmtController@smtpconfigemail')->name('smt_pc_onfig_email')->middleware('auth');
//Statistics
Route::get('statistics','StatisticsController@statistics')->name('statistics')->middleware('auth');
//Stock
Route::get('supplier-record','StockController@supplierrecord')->name('supplier_record')->middleware('auth');
Route::get('new-supplier-record','StockController@newsupplierrecord')->name('new_supplier_record')->middleware('auth');
Route::post('new-supplier-record-form','StockController@newsupplierrecordform')->name('new_supplier_record_form')->middleware('auth');
Route::get('view-supplier-record/{id}','StockController@viewsupplierrecord')->name('view_supplier_record')->middleware('auth');
Route::get('edit-supplier-record/{id}','StockController@editsupplierrecord')->name('edit_supplier_record')->middleware('auth');
Route::put('edit-supplier-record-form','StockController@editsupplierrecordform')->name('edit_supplier_record_form')->middleware('auth');
Route::delete('delete-supplier-record/{id}','StockController@deletesupplierrecord')->name('delete_supplier_record')->middleware('auth');
// Customer Record
Route::get('customer-record','StockController@customerrecord')->name('customer_record')->middleware('auth');
Route::get('new-customer-record','StockController@newcustomerrecord')->name('new_customer_record')->middleware('auth');
Route::post('new-customer-record-form','StockController@newcustomerrecordform')->name('new_customer_record_form')->middleware('auth');
Route::get('view-customer-record/{id}','StockController@viewcustomerrecord')->name('view_customer_record')->middleware('auth');
Route::get('edit-customer-record/{id}','StockController@editcustomerrecord')->name('edit_customer_record')->middleware('auth');
Route::put('edit-customer-record-form','StockController@editcustomerrecordform')->name('edit_customer_record_form')->middleware('auth');
Route::delete('delete-customer-record/{id}','StockController@deletecustomerrecord')->name('delete_customer_record')->middleware('auth');
Route::get('stock-transfer','StockController@stocktransfer')->name('stock_transfer')->middleware('auth');
//Support
Route::get('editincome/{id}','SupportController@editincome')->name('Editincome')->middleware('auth');
Route::get('editexpense/{id}','SupportController@editincome2')->name('Editincome2')->middleware('auth');


Route::get('support-tickets','SupportController@supporttickets')->name('support_tickets')->middleware('auth');
Route::get('support-ticket-setting','SupportController@supportticketset')->name('support_ticket_setting')->middleware('auth');
Route::get('create/income','SupportController@supportticketsunsolved')->name('support_tickets_un_solved')->middleware('auth');
Route::get('recaptcha','SupportController@recaptcha')->name('recaptcha')->middleware('auth');
Route::get('shorten','SupportController@shorten')->name('shorten')->middleware('auth');
Route::get('sms-service','SupportController@smsservice')->name('sms_service')->middleware('auth');
Route::get('woocommerce','SupportController@woocommerce')->name('woocommerce')->middleware('auth');
Route::get('printer','SupportController@printer')->name('printer')->middleware('auth');
Route::get('add-printer','SupportController@addprinter')->name('add_printer')->middleware('auth');
Route::get('balance','SupportController@addbalance')->name('addbalance')->middleware('auth');
Route::get('tax/list','SupportController@taxlist')->name('taxlist')->middleware('auth');
Route::delete('/delete/tax/{product_id}','SupportController@deletetax')->name('taxdelete')->middleware('auth');
// support insert****
Route::post('add-cash-form','SupportController@addcashform')->name('add_cash_form')->middleware('auth');
Route::post('add-cheque-form','SupportController@addchequeform')->name('add_cheque_form')->middleware('auth');
Route::post('add-banlace-form','SupportController@addbalanceform')->name('add_balance_form')->middleware('auth');

//Sales Tax
Route::get('sales','SupportController@addsales')->name('addsales')->middleware('auth');
Route::post('add-sale-form','SupportController@addsaleform')->name('add_sales_form')->middleware('auth');

//Tax
Route::get('tax-setting','TaxController@taxsetting')->name('tax_setting')->middleware('auth');
Route::get('tax-slabs','TaxController@taxslabs')->name('tax_slabs')->middleware('auth');
Route::get('tax-statement-export','TaxController@taxstatementexport')->name('tax_statement_export')->middleware('auth');
Route::get('tax-statement','TaxController@taxstatement')->name('tax_statement')->middleware('auth');
//ToDo
Route::get('to-do-list','ToDoController@todolist')->name('to_do')->middleware('auth');
Route::get('add-to-do','ToDoController@addtodo')->name('add_to_do')->middleware('auth');
Route::post('add-to-do-form','ToDoController@addtodoform')->name('addtodoform')->middleware('auth');
Route::get('edit-to-do/{id}','ToDoController@edittodo')->name('edit_to_do')->middleware('auth');
Route::put('edit-to-do-form','ToDoController@edittodoform')->name('edit_to_do_form')->middleware('auth');
Route::delete('delete-to-do/{id}','ToDoController@deletetodo')->name('delete_to_do')->middleware('auth');
//Update
Route::get('update','UpdateController@update')->name('update')->middleware('auth');

//Message
Route::get('all-meassage','MessageController@message')->name('all_message')->middleware('auth');
Route::get('view-meassage/{id}','MessageController@viewmessage')->name('view_message')->middleware('auth');
Route::post('send-meassage-form','MessageController@messagesendform')->name('send_message_form')->middleware('auth');
Route::delete('delete-meassage/{id}','MessageController@deletemessage')->name('delete_message')->middleware('auth');





//Company
View::composer(['*'], function($view){
    $company = \App\CompanySettingModel::first();
    $view->with('company',$company);
});

//Message
View::composer(['*'], function($view){
    $message = \App\MessageModel::where('status',1)->get();
    $view->with('message',$message);
});
