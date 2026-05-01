@extends('app')

@section('title', 'Donasi')

@section('content')
<style>
.page-hero {
    background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%);
    padding: 50px 24px;
    text-align: center;
}
.page-hero h1 { font-size: 1.8rem; font-weight: 800; color: #16a34a; margin-bottom: 8px; }
.page-hero p { color: #6b7280; font-size: 0.95rem; }
.donasi-section { max-width: 1100px; margin: 0 auto; padding: 48px 24px; }
.donasi-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 24px; }
.card { background: #fff; border-radius: 16px; overflow: hidden; box-shadow: 0 2px 12px rgba(0,0,0,0.07); transition: transform 0.2s; }
.card:hover { transform: translateY(-4px); }
.card-img { height: 160px; display: flex; align-items: center; justify-content: center; font-size: 3rem; }
.card-body { padding: 20px; }
.card-body h4 { font-weight: 700; margin-bottom: 6px; }
.card-body p { font-size: 0.85rem; color: #6b7280; margin-bottom: 16px; line-height: 1.5; }
.progress-bar { background: #e5e7eb; border-radius: 100px; height: 8px; margin-bottom: 8px; overflow: hidden; }
.progress-fill { height: 100%; background: #16a34a; border-radius: 100px; }
.progress-label { display: flex; justify-content: space-between; font-size: 0.78rem; color: #9ca3af; margin-bottom: 14px; }
.badge { display: inline-block; background: #dcfce7; color: #16a34a; padding: 2px 10px; border-radius: 100px; font-size: 0.75rem; font-weight: 600; margin-bottom: 8px; }
.btn-card { width: 100%; background: #16a34a; color: #fff; border: none; padding: 10px; border-radius: 8px; font-weight: 600; font-size: 0.88rem; font-family: inherit; cursor: pointer; }
.btn-card:hover { background: #15803d; }
</style>

<div class="page-hero">
    <h1>Program Donasi</h1>
    <p>Temukan dan dukung program sosial yang bermakna bagimu</p>
</div>

<div class="donasi-section">
    <div class="donasi-grid">
        <div class="card">
            <div class="card-img" style="background:#fef9c3;">🏫</div>
            <div class="card-body">
                <span class="badge">Pendidikan</span>
                <h4>Beasiswa Anak Kurang Mampu</h4>
                <p>Membantu anak-anak berprestasi yang membutuhkan dukungan biaya pendidikan.</p>
                <div class="progress-bar"><div class="progress-fill" style="width:72%"></div></div>
                <div class="progress-label"><span>Rp 3,6 Jt terkumpul</span><span>72%</span></div>
                <button class="btn-card">Donasi Sekarang</button>
            </div>
        </div>
        <div class="card">
            <div class="card-img" style="background:#dbeafe;">🏥</div>
            <div class="card-body">
                <span class="badge">Kesehatan</span>
                <h4>Bantu Biaya Pengobatan</h4>
                <p>Meringankan beban biaya pengobatan warga yang tidak mampu.</p>
                <div class="progress-bar"><div class="progress-fill" style="width:48%"></div></div>
                <div class="progress-label"><span>Rp 2,4 Jt terkumpul</span><span>48%</span></div>
                <button class="btn-card">Donasi Sekarang</button>
            </div>
        </div>
        <div class="card">
            <div class="card-img" style="background:#fce7f3;">🍱</div>
            <div class="card-body">
                <span class="badge">Pangan</span>
                <h4>Program Pangan Darurat</h4>
                <p>Menyalurkan sembako untuk keluarga kurang mampu di sekitar kita.</p>
                <div class="progress-bar"><div class="progress-fill" style="width:89%"></div></div>
                <div class="progress-label"><span>Rp 8,9 Jt terkumpul</span><span>89%</span></div>
                <button class="btn-card">Donasi Sekarang</button>
            </div>
        </div>
        <div class="card">
            <div class="card-img" style="background:#d1fae5;">🏠</div>
            <div class="card-body">
                <span class="badge">Infrastruktur</span>
                <h4>Rehab Rumah Tidak Layak</h4>
                <p>Membangun hunian yang layak bagi keluarga prasejahtera.</p>
                <div class="progress-bar"><div class="progress-fill" style="width:35%"></div></div>
                <div class="progress-label"><span>Rp 7 Jt terkumpul</span><span>35%</span></div>
                <button class="btn-card">Donasi Sekarang</button>
            </div>
        </div>
        <div class="card">
            <div class="card-img" style="background:#ede9fe;">💧</div>
            <div class="card-body">
                <span class="badge">Lingkungan</span>
                <h4>Air Bersih Pedesaan</h4>
                <p>Menghadirkan akses air bersih untuk desa terpencil yang kekurangan.</p>
                <div class="progress-bar"><div class="progress-fill" style="width:60%"></div></div>
                <div class="progress-label"><span>Rp 6 Jt terkumpul</span><span>60%</span></div>
                <button class="btn-card">Donasi Sekarang</button>
            </div>
        </div>
        <div class="card">
            <div class="card-img" style="background:#fee2e2;">🧒</div>
            <div class="card-body">
                <span class="badge">Anak</span>
                <h4>Perlindungan Anak Yatim</h4>
                <p>Memberikan perlindungan, pendidikan, dan kasih sayang untuk anak yatim.</p>
                <div class="progress-bar"><div class="progress-fill" style="width:55%"></div></div>
                <div class="progress-label"><span>Rp 5,5 Jt terkumpul</span><span>55%</span></div>
                <button class="btn-card">Donasi Sekarang</button>
            </div>
        </div>
    </div>
</div>
@endsection
