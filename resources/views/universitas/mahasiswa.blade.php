<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>

<body>
    <div class="container text-center mt-3 pt-3 bg-white">
        <div class="border border-black">
            <h1 class="bg-dark px-3 py-1 text-white d-inline-block mt-2">
                {{ $nama }}
            </h1>
            <br>
            @forelse ($nilai as $val)
                @if ($val >= 0 and $val < 50)
                    <div class="alert alert-danger d-inline-block">
                        {{ $val }}
                    </div>
                @elseif ($val >= 50 and $val <= 100)
                    <div class="alert alert-success d-inline-block">
                        {{ $val }}
                    </div>
                @endif
            @empty
                <div class="alert alert-dark d-inline-block">
                    Tidak Ada Data...
                </div>
            @endforelse
        </div>
        <br>
        <div class="d-sm-flex align-items-sm-center justify-content-sm-center gap-1">
            <div class=""">
                @if ($nilai >= 0 and $nilai < 50)
                    <div class="alert alert-danger d-inline-block">
                        Maaf, Anda tidak lulus!
                    </div>
                @elseif ($nilai >= 50 and $nilai <= 100)
                    <div class="alert alert-success d-inline-block">
                        Selamat Anda Lulus!
                    </div>
                @endif
            </div>
            <div class="">
                @switch($nilai)
                    @case(0)
                        <div class="alert
                alert-danger d-inline-block">TIdak Ikut Ujian!</div>
                    @break

                    @case(75)
                        <div class="alert alert-success d-inline-block">Lumayan</div>
                    @break

                    @case(100)
                        <div class="alert alert-success d-inline-block">Sempurna</div>
                    @break

                    @default
                        <div class="alert alert-dark d-inline-block">Nilai Tidak Valid</div>
                @endswitch
            </div>
            <div class="text-center bg-white">
                @for ($i = 0; $i < 1; $i++)
                    <div class="alert alert-info d-inline-block">
                        Laravel
                    </div>
                @endfor
            </div>
            <div class="text-center bg-white">
                <?php $i = 0; ?>
                @while ($i < 1)
                    <div class="alert alert-info d-inline-block">
                        {{ $i }}
                    </div>
                    <?php $i++; ?>
                @endwhile
            </div>
            <div class="text-center bg-white">
                @foreach ($nilai as $val)
                    @if ($val < 50)
                        @continue
                    @endif
                    <div class="alert alert-success d-inline-block">
                        {{ $val }}
                    </div>
                @endforeach
            </div>
            {{-- <div class="text-center  bg-white">
                @foreach ($nilai as $val)
                    @if ($val < 50)
                    @break
                @endif
                <div class="alert alert-dark d-inline-block">
                    {{ $val }}
                </div>
            @endforeach
        </div> --}}
        </div>
    </div>
    <script src="/js/bootstrap.min.js"></script>
</body>

</html>
