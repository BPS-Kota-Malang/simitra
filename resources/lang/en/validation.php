<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Atribut harus diterima.',
    'active_url' => 'Atribut bukan URL yang valid.',
    'after' => 'Atribut harus berupa tanggal setelah :date.',
    'after_or_equal' => 'Atribut harus tanggal setelah atau sama dengan :date.',
    'alpha' => 'Atribut hanya boleh berisi huruf.',
    'alpha_dash' => 'Atribut hanya boleh berisi huruf, angka, tanda hubung, dan garis bawah.',
    'alpha_num' => ':Atribut hanya boleh berisi huruf dan angka.',
    'array' => 'Aribut harus berupa array.',
    'before' => 'Atribut harus tanggal sebelum :date.',
    'before_or_equal' => 'Atribut harus tanggal sebelum atau sama dengan :date.',
    'between' => [
        'numeric' => 'Atribut harus antara :min dan :max.',
        'file' => 'Atribut harus antara :min dan :max kilobytes.',
        'string' => 'Atribut harus antara :min dan :max karakter.',
        'array' => 'Atribut harus memiliki antara :min dan :max item.',
    ],
    'boolean' => 'Bidang atribut harus benar atau salah.',
    'confirmed' => 'Konfirmasi atribut tidak cocok.',
    'date' => 'Atribut bukan tanggal yang valid.',
    'date_equals' => 'Atribut harus berupa tanggal yang sama dengan :date.',
    'date_format' => 'Atribut tidak cocok dengan format :format.',
    'different' => 'Atribut dan :lainnya harus berbeda.',
    'digits' => 'Atribut harus :digit.',
    'digits_between' => 'Atribut harus antara :min dan :max digit.',
    'dimensions' => 'Atribut memiliki dimensi gambar yang tidak valid.',
    'distinct' => 'Bidang atribut memiliki nilai duplikat.',
    'email' => 'Atribut harus berupa alamat email yang valid.',
    'ends_with' => 'Atribut harus diakhiri dengan salah satu dari berikut ini: :values.',
    'exists' => 'Atribut yang dipilih tidak valid.',
    'file' => 'Atribut harus berupa file.',
    'filled' => 'Bidang atribut harus memiliki nilai.',
    'gt' => [
        'numeric' => 'Atribut harus lebih besar dari :value.',
        'file' => 'Atribut harus lebih besar dari :value kilobytes.',
        'string' => 'Atribut harus lebih besar dari :value karakter.',
        'array' => 'Atribut harus memiliki lebih dari :value item.',
    ],
    'gte' => [
        'numeric' => 'Atribut harus lebih besar dari atau sama dengan :value.',
        'file' => 'Atribut harus lebih besar dari atau sama dengan :value kilobytes.',
        'string' => 'Atribut harus lebih besar dari atau sama dengan :value karakter.',
        'array' => 'Atribut harus memiliki :value item atau lebih.',
    ],
    'image' => 'Atribut harus berupa gambar.',
    'in' => 'Atribut yang dipilih tidak valid.',
    'in_array' => 'Bidang atribut tidak ada di :other.',
    'integer' => 'Atribut harus bilangan bulat.',
    'ip' => 'Atribut harus berupa alamat IP yang valid.',
    'ipv4' => 'Atribut harus berupa alamat IPv4 yang valid.',
    'ipv6' => 'Atribut harus berupa alamat IPv6 yang valid.',
    'json' => 'Atribut harus berupa string JSON yang valid.',
    'lt' => [
        'numeric' => 'Atribut harus lebih kecil dari :value.',
        'file' => 'Atribut harus lebih kecil dari :value kilobytes.',
        'string' => 'Atribut harus lebih kecil dari :value character.',
        'array' => 'Atribut harus memiliki kurang dari :value item.',
    ],
    'lte' => [
        'numeric' => 'Atribut harus lebih kecil atau sama dengan :value.',
        'file' => 'Atribut harus kurang dari atau sama dengan :value kilobytes.',
        'string' => 'Atribut harus kurang dari atau sama dengan :value karakter.',
        'array' => 'Atribut tidak boleh memiliki lebih dari :value item.',
    ],
    'max' => [
        'numeric' => 'Atribut tidak boleh lebih besar dari :max.',
        'file' => 'Atribut tidak boleh lebih besar dari :max kilobytes.',
        'string' => 'Atribut tidak boleh lebih besar dari :max karakter.',
        'array' => 'Atribut tidak boleh memiliki lebih dari :max item.',
    ],
    'mimes' => 'Atribut harus berupa file dengan tipe: :values.',
    'mimetypes' => 'Atribut harus berupa file dengan tipe: :values.',
    'min' => [
        'numeric' => 'Atribut minimal harus :min.',
        'file' => 'Atribut minimal harus :min kilobytes.',
        'string' => 'Atribut harus minimal :min karakter.',
        'array' => 'Atribut harus memiliki setidaknya :min item.',
    ],
    'multiple_of' => 'Atribut harus kelipatan dari :value',
    'not_in' => 'Atribut yang dipilih tidak valid.',
    'not_regex' => 'Format atribut tidak valid.',
    'numeric' => 'Atribut harus berupa angka.',
    'password' => 'Kata sandi salah.',
    'present' => 'Bidang atribut harus ada.',
    'regex' => 'Format atribut tidak valid.',
    'required' => 'Kolom atribut wajib diisi.',
    'required_if' => 'Bidang atribut diperlukan ketika :other adalah :value.',
    'required_unless' => 'Bidang atribut wajib diisi kecuali :other ada di :values.',
    'required_with' => 'Bidang :atribut diperlukan saat :nilai ada.',
    'required_with_all' => 'Bidang :atribut diperlukan saat :nilai ada.',
    'required_without' => 'Bidang :atribut diperlukan saat :nilai tidak ada.',
    'required_without_all' => 'Bidang :atribut diperlukan saat tidak ada :nilai yang ada.',
    'same' => 'Atribut dan :other harus cocok.',
    'size' => [
        'numeric' => 'Atribut harus :size.',
        'file' => 'Atribut harus :size kilobytes.',
        'string' => 'Atribut harus :size character.',
        'array' => 'Atribut harus berisi :size item.',
    ],
    'starts_with' => 'Atribut harus dimulai dengan salah satu dari berikut ini: :values.',
    'string' => 'Atribut harus berupa string.',
    'timezone' => 'Atribut harus berupa zona yang valid.',
    'unique' => 'Atribut sudah diambil.',
    'uploaded' => 'Atribut gagal diunggah.',
    'url' => 'Format atribut tidak valid.',
    'uuid' => 'Atribut harus berupa UUID yang valid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
