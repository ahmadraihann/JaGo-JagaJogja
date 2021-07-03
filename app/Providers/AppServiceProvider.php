<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Laporan;
use App\Divisi;
use App\DataMasuk;
use View;
use DB;
use App\User;
use Illuminate\SUpport\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {        

        View::composer('*', function($view){
            $view->with('auth', Auth::user());
        });

        view()->composer('*', function($view){
            $view->with('Classname_array', Laporan::all());
        });

        view()->composer('*', function($view){
            $view->with('divis_array', Divisi::all());
        });

        view()->composer('*', function($view){
            $view->with('case_array', DataMasuk::all());
        });

        View::composer('*', function($view){
            
            $data_laporan = Laporan::all();
            $totalNilai = 0;
            foreach($data_laporan as $laporan){
                $point = $laporan->point;
                $totalNilai = $totalNilai+$point;
            }
            $view->with('jumlah_point', $totalNilai);
        });

        View::composer('*', function($view){
            $total_aksi = DB::table('laporan')->count();
            $view->with('total', $total_aksi);
        });

        View::composer('*', function($view){
            $data_lprn = DB::table('laporan')->orderBy('created_at', 'desc')->paginate(3);
            $view->with('data_lprn', $data_lprn);
        });

    }
}
