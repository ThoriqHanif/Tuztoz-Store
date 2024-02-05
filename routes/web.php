<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\allGameController;
use App\Http\Controllers\aboutUsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TestController;
use App\Http\Controllers\Admin\OrderController as AdminOrder;
use App\Http\Controllers\Admin\OvoController;
use App\Http\Controllers\Admin\GojekController;
use App\Http\Controllers\Admin\Berita;
use App\Http\Controllers\Admin\LicenseController;
use App\Http\Controllers\CariController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\TriPayCallbackController;
use App\Http\Controllers\iPaymuController;
use App\Http\Controllers\IsiUlangController;
use App\Http\Controllers\RiwayatPembelian;
use App\Http\Controllers\Admin\UserDepositController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\Admin\WhatsappController;
use App\Http\Controllers\SmileOneController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\PricelistController;
use App\Http\Controllers\DsController;
use App\Http\Controllers\MethodController;
use App\Http\Controllers\HitungpointmwController;
use App\Http\Controllers\HitungpointzodiacController;
use App\Http\Controllers\HitungwrController;
use App\Http\Controllers\SetingController;
use App\Http\Controllers\TermsandconditionsController;
use App\Http\Controllers\privacypolicyController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\ToptenController;
use App\Http\Controllers\ResellerpageController;
use App\Http\Controllers\getProductbjController;
use App\Http\Controllers\orderBjController;
use App\Http\Controllers\Admin\DataJokiController;
use App\Http\Controllers\Admin\OrderManualController;
use App\Http\Controllers\Admin\SettingWebController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\DataGiftSkinController;
use App\Http\Controllers\Admin\DataDMVilogController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\ratingCustomerController;
use App\Http\Controllers\ratingAdminController;
use App\Models\PaketLayanan;
use App\Http\Controllers\PaketLayananController;
use App\Http\Controllers\sendReportController;
use App\Http\Controllers\BxystoreController;
use App\Http\Controllers\EvillController;

Route::get('/send', [SendReportController::class, 'sendReport']);

Route::get('/forgot-password', [ForgotPasswordController::class, 'forgotPassword']);
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendOtp']);
Route::post('/verify/otp', [ForgotPasswordController::class, 'verifyOtp']);

Route::get('/web/jsg', function () {
    Illuminate\Support\Facades\Artisan::call("down --render=maintenance --secret=kbr123566");
});

Route::get('/web/up', function () {
    Illuminate\Support\Facades\Artisan::call("up");
});

Route::get('/gamepoint/product', function () {
    $gp = new \App\Http\Controllers\GamePoint;
    dd(json_decode($gp->getProduct(), true));
});

Route::get('/gamepoint/item/{product}', function ($product) {
    $gp = new \App\Http\Controllers\GamePoint;
    dd(json_decode($gp->getItem($product), true));
});

Route::get('/get-harga', function () {
    $bxystoreController = new EvillController();
    $hargaData = $bxystoreController->status();
    dd($hargaData);

    return response()->json($hargaData);
});


Route::get('/we', [EvillController::class, 'harga']);

Route::get('/tes', function () {
    Illuminate\Support\Facades\Artisan::call("updatePesanan");
});

Route::get('/getservice', function () {
    Illuminate\Support\Facades\Artisan::call("Service");
});

Route::get('/account', [DsController::class, 'dashboard'])->middleware('auth')->name('dash');
Route::get('/riwayat', [DsController::class, 'riwayat'])->middleware('auth')->name('riwayat.transaksi');
Route::get('/account/setting', [DsController::class, 'editProfile'])->middleware('auth')->name('edit');
Route::post('/account/setting', [DsController::class, 'saveEditProfile'])->middleware('auth');
Route::get('/user/edit/profile', [DsController::class, 'editProfile'])->middleware('auth');
Route::post('/user/edit/profile', [DsController::class, 'saveEditProfile'])->middleware('auth');
Route::post('/cari/index', [IndexController::class, 'cariIndex']);
Route::get('/', [indexController::class, 'create'])->name('home');
Route::get('/all', [allGameController::class, 'create'])->name('allgame');
Route::get('/about-us', [aboutUsController::class, 'create'])->name('aboutus');
Route::get('/order/{kategori:kode}', [OrderController::class, 'create']);
Route::post('/order/harga', [OrderController::class, 'price'])->name('ajax.price');
Route::post('/order/konfirmasi-data', [OrderController::class, 'confirm'])->name('ajax.confirm-data');
Route::post('/order/pembelian', [OrderController::class, 'store'])->name('order');
Route::get('/pembelian/invoice/{order}', [InvoiceController::class, 'create'])->name('pembelian');
Route::post('/pembelian/invoice/{order}', [InvoiceController::class, 'ratingCustomer'])->name('pembelian');
Route::post('/check-voucher', [VoucherController::class, 'confirm'])->name('check.voucher');

Route::get('/cari', [CariController::class, 'create'])->name('cari');
Route::post('/cari', [CariController::class, 'store'])->name('cari.post');


Route::get('/ppob/{kategori:kode}', [IsiUlangController::class, 'create'])->name('ppob');
Route::post('/ppob/layanan', [IsiUlangController::class, 'layanan'])->name('ajax.layanan.ppob');
Route::post('/ppob/harga', [IsiUlangController::class, 'price'])->name('ajax.price.ppob');
Route::post('/ppob/konfirmasi-data', [IsiUlangController::class, 'confirm'])->name('ajax.confirm-data.ppob');
Route::post('/ppob/pembelian', [IsiUlangController::class, 'store'])->name('pembelian.ppob');

Route::get('/daftar-harga', [PricelistController::class, 'create'])->name('price');
Route::get('/magicwheel', [HitungpointmwController::class, 'create'])->name('hitungpointmw');
Route::get('/zodiac', [HitungpointzodiacController::class, 'create'])->name('hitungpointzodiac');
Route::get('/winrate', [HitungwrController::class, 'create'])->name('hitungwr');
Route::get('/page/terms', [TermsandconditionsController::class, 'create'])->name('Terms-and-conditions');
// Route::get('/privacy-policy',                               [privacypolicyController::class, 'create'])->name('privacy-policy');
// Route::get('/contact',                                      [contactController::class, 'create'])->name('contact');
Route::get('/topten', [ToptenController::class, 'create'])->name('topten');
// Route::get('/productbj',                                    [getProductbjController::class, 'getProductData'])->name('productbj');
// Route::get('/orderbj',                                      [orderBjController::class, 'orderBjf'])->name('orderbj');
// Route::get('/userbj',                                      [getUserbjController::class, 'getUserbj'])->name('userbj');



Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('post.login');
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('post.register');
});
Route::post('/callback', [\App\Http\Controllers\DuitkuController::class, 'handle']);

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

    Route::get('/account/deposit', [DepositController::class, 'create'])->name('deposit');
    Route::get('/account/deposit/history', [DepositController::class, 'riwayatDeposit'])->name('deposit.history');
    Route::post('/account/deposit', [DepositController::class, 'store'])->name('deposit.post');

    Route::get('/account/membership', [MembershipController::class, 'create'])->name('membership');

    Route::get('/account/transaction', [RiwayatPembelian::class, 'create'])->name('riwayat');
    Route::get('/account/transaction/{id}/detail', [RiwayatPembelian::class, 'show'])->name('riwayat.detail');


    Route::get('/api-documentation', [\App\Http\Controllers\ApiDocController::class, 'create'])->name('api');
    Route::get('/reset-key', [\App\Http\Controllers\ApiDocController::class, 'reset'])->name('reset-key');
});

Route::middleware(['auth', 'check.role'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'create'])->name('dashboard');

    //History Transaksi
    Route::get('/pesanan', [AdminOrder::class, 'create'])->name('pesanan');
    Route::get('/order-status/{order_id}/{status}', [AdminOrder::class, 'update']);

    //Mutasi Ovo
    Route::get('/ovo', [OvoController::class, 'create'])->name('ovo');
    Route::post('/ovo', [OvoController::class, 'store'])->name('ovo.post');
    Route::get('/ovo/Get-OTP/{no}', [OvoController::class, 'GetOTP']);
    Route::post('/ovo/Validasi-OTP', [OvoController::class, 'VerifOTP']);
    Route::post('/ovo/Validasi-PIN', [OvoController::class, 'VerifPIN']);
    Route::get('/Ovo-Transaksi', [OvoController::class, 'getTransaction']);

    //Mutasi Gopay
    Route::get('/gopay', [GojekController::class, 'create'])->name('gopay');
    Route::post('/gopay', [GojekController::class, 'store'])->name('gopay.post');
    Route::get('/gopay/Gojek-OTP/{no}', [GojekController::class, 'GetOTP']);
    Route::post('/gopay/Gojek-validasi', [GojekController::class, 'VerifOTP']);
    Route::get('/Gopay-Transaksi', [GojekController::class, 'getTransaction'])->name('gopay.transaction');

    //Berita
    Route::get('/berita', [Berita::class, 'create'])->name('berita');
    Route::post('/berita', [Berita::class, 'post'])->name('berita.post');
    Route::get('/berita/hapus/{id}', [Berita::class, 'delete'])->name('berita.delete');

    //Kategori
    Route::get('/kategori', [KategoriController::class, 'create'])->name('kategori');
    Route::post('/kategori', [KategoriController::class, 'store'])->name('kategori.post');
    Route::get('/kategori/hapus/{id}', [KategoriController::class, 'delete'])->name('kategori.delete');
    Route::get('/kategori-status/{id}/{status}', [KategoriController::class, 'update'])->name('kategori.update');
    Route::post('/kategori/update', [KategoriController::class, 'patch'])->name('kategori.detail.update');

    Route::get('/kategori/{id}/detail', [KategoriController::class, 'detail'])->name('kategori.detail');
    Route::post('/kategori/{id}/detail', [KategoriController::class, 'patch'])->name('kategori.detail.update');

    //sub category
    Route::get('/subkategori', [\App\Http\Controllers\Admin\SubCategories::class, 'create'])->name('subkategori');
    Route::post('/subkategori', [\App\Http\Controllers\Admin\SubCategories::class, 'store'])->name('subkategori.post');
    Route::get('/subkategori/hapus/{id}', [\App\Http\Controllers\Admin\SubCategories::class, 'destroy']);
    //Layanan
    Route::get('/layanan', [LayananController::class, 'create'])->name('layanan');
    Route::get('/ajax/getsubkat', [LayananController::class, 'getSubCategories'])->name('ajax.getsub');
    Route::post('/layanan', [LayananController::class, 'store'])->name('layanan.post');
    Route::get('/layanan/hapus/{id}', [LayananController::class, 'delete'])->name('layanan.delete');
    Route::get('/layanan-status/{id}/{status}', [LayananController::class, 'update'])->name('layanan.update');

    Route::get('/layanan/{id}/detail', [LayananController::class, 'detail'])->name('layanan.detail');
    Route::post('/layanan/{id}/detail', [LayananController::class, 'patch'])->name('layanan.detail.update');

    // PAKET
    Route::resources(['paket' => PaketController::class, 'paket-layanan' => PaketLayananController::class]);
    Route::post('paket-layanan-get-layanan', [PaketLayananController::class, 'get_layanan'])->name('paket-layanan.get-layanan');

    //Method
    Route::get('/method', [MethodController::class, 'create'])->name('method');
    Route::post('/method', [MethodController::class, 'store'])->name('method.post');
    Route::get('/method/hapus/{id}', [MethodController::class, 'delete'])->name('method.delete');
    Route::post('/method/update', [MethodController::class, 'patch'])->name('method.detail.update');

    Route::get('/method/{id}/detail', [MethodController::class, 'detail'])->name('method.detail');
    Route::post('/method/{id}/detail', [MethodController::class, 'patch'])->name('method.detail.update');

    //Seting
    Route::get('/seting', [SetingController::class, 'create'])->name('seting');
    Route::post('/seting', [SetingController::class, 'store'])->name('seting.post');
    Route::get('/seting/hapus/{id}', [SetingController::class, 'delete'])->name('seting.delete');
    Route::post('/seting/update', [SetingController::class, 'patch'])->name('seting.detail.update');
    Route::get('/seting/{id}/detail', [SetingController::class, 'detail'])->name('seting.detail');
    Route::post('/seting/{id}/detail', [SetingController::class, 'patch'])->name('seting.detail.update');

    //Member
    Route::get('/member', [MemberController::class, 'create'])->name('member');
    Route::get('/member/{id}/delete', [MemberController::class, 'delete'])->name('member.delete');
    Route::post('/member', [MemberController::class, 'store'])->name('member.post');
    Route::post('/send-balance', [MemberController::class, 'send'])->name('saldo.post');
    Route::get('/member/{id}/detail', [MemberController::class, 'show'])->name('member.detail');
    Route::post('/member/update', [MemberController::class, 'patch'])->name('member.detail.update');

    //Deposit
    Route::get('/user-deposit', [UserDepositController::class, 'create'])->name('user.deposit');
    Route::get('/user-deposit/{id}/{status}', [UserDepositController::class, 'patch'])->name('confirm.deposit');

    //Whatsapp
    Route::get('/whatsapp', [WhatsappController::class, 'create'])->name('whatsapp');

    //Smile One
    Route::get('/smile-one', [SmileOneController::class, 'create'])->name('smileone');
    Route::post('/smile-one', [SmileOneController::class, 'store'])->name('smileone.post');

    Route::get('/license', [LicenseController::class, 'create'])->name('license');
    Route::post('/license', [LicenseController::class, 'store'])->name('license.post');
    Route::get('/license/{id}', [LicenseController::class, 'destroy'])->name('license.delete');


    //Promo

    Route::get('/promo', [Berita::class, 'create'])->name('promo');
    Route::post('/promo', [Berita::class, 'post'])->name('promo.post');
    Route::get('/promo/hapus/{id}', [Berita::class, 'delete'])->name('promo.delete');




    //Voucher
    Route::get('/voucher', [VoucherController::class, 'create'])->name('voucher');
    Route::post('/voucher', [VoucherController::class, 'store'])->name('voucher.post');
    Route::get('/voucher/{id}/delete', [VoucherController::class, 'destroy'])->name('voucher.delete');
    Route::get('/voucher/{id}/detail', [VoucherController::class, 'show'])->name('voucher.detail');
    Route::post('/voucher/{id}/update', [VoucherController::class, 'patch'])->name('voucher.detail.update');

    //SETTING WEB
    Route::get('/setting/web', [SettingWebController::class, 'settingWeb']);
    Route::post('/setting/web', [SettingWebController::class, 'saveSettingWeb']);
    Route::post('/setting/snk', [SettingWebController::class, 'saveSyaratKetentuan']);
    Route::post('/setting/warnaweb', [SettingWebController::class, 'saveSettingWarna']);
    Route::post('/setting/hargamembership', [SettingWebController::class, 'saveHargaMembership']);
    Route::post('/setting/tripay', [SettingWebController::class, 'saveSettingTripay']);
    Route::post('/setting/digiflazz', [SettingWebController::class, 'saveSettingDigiflazz']);
    Route::post('/setting/apigames', [SettingWebController::class, 'saveSettingApigames']);
    Route::post('/setting/vip', [SettingWebController::class, 'saveSettingVip']);
    Route::post('/setting/wagateway', [SettingWebController::class, 'saveSettingWagateway']);
    Route::post('/setting/mutasi', [SettingWebController::class, 'saveSettingMutasi']);
    Route::post('/setting/sloganweb', [SettingWebController::class, 'saveSlogan']);
    Route::post('/setting/tentang-kami', [SettingWebController::class, 'saveAbout']);

    //DATA JOKI
    Route::get('/data/joki', [DataJokiController::class, 'dataJoki'])->name('data.joki');
    Route::get('/joki-status/{order_id}/{status}', [DataJokiController::class, 'statusJoki']);
    Route::get('/joki/hapus/{id}', [DataJokiController::class, 'hapusJoki']);

    //PESANAN MANUAL
    Route::get('/pesanan/manual', [OrderManualController::class, 'orderManual']);
    Route::post('/pesanan/manual/ajax/layanan', [OrderManualController::class, 'ajaxLayanan']);
    Route::post('/pesanan/manual', [OrderManualController::class, 'order']);

    //DATA GIFT SKIN
    Route::get('/data/giftskin', [DataGiftSkinController::class, 'dataGiftSkin']);
    Route::get('/giftskin-status/{order_id}/{status}', [DataGiftSkinController::class, 'statusGiftSkin']);
    Route::get('/giftskin/hapus/{id}', [DataGiftSkinController::class, 'hapusGiftSkin']);

    //DATA DM VILOG
    Route::get('/data/dmvilog', [DataDMVilogController::class, 'dataDMVilog']);
    Route::get('/dmvilog-status/{order_id}/{status}', [DataDMVilogController::class, 'statusDMVilog']);
    Route::get('/dmvilog/hapus/{id}', [DataDMVilogController::class, 'hapusDMVilog']);


    //FOOTER
    Route::get('/footer', [FooterController::class, 'footer']);
    Route::post('/footer/parent', [FooterController::class, 'footerParent']);
    Route::post('/footer', [FooterController::class, 'footerChild']);
    Route::get('/footer/delete/{id}', [FooterController::class, 'footerDelete']);

    Route::get('/rating', [ratingController::class, 'create'])->name('rating');
    Route::get('/ratingcust', [ratingCustomerController::class, 'create'])->name('ratingcust');
    Route::get('/rating-customer', [ratingAdminController::class, 'create'])->name('rating-customer');
    Route::delete('/rating-customer/{id}', [ratingAdminController::class, 'destroy'])->name('rating-customer.destroy');
});

// Route::get('dashboard', function () {
//     return view('components/admin/dashboard');
// });

Route::get('/test-template', [TestController::class, 'create'])->name('test');
