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

    'accepted' => 'يجب قبول حقل :attribute.',
    'accepted_if' => 'يجب قبول حقل :attribute عندما يكون :other هو :value.',
    'active_url' => 'يجب أن يكون حقل السمة عنوان URL صالحًا.',
    'after' => 'يجب أن يكون حقل :attribute تاريخًا بعد :date.',
    'after_or_equal' => 'يجب أن يكون حقل السمة: تاريخًا بعد أو يساوي:date.',
    'alpha' => 'يجب أن يحتوي حقل :attribute على أحرف فقط.',
    'alpha_dash' => 'يجب أن يحتوي حقل :attribute على أحرف وأرقام وشرطات وشرطات سفلية فقط.',
    'alpha_num' => 'يجب أن يحتوي حقل :attribute على أحرف وأرقام فقط.',
    'array' => 'يجب أن يكون حقل السمة: مصفوفة.',
    'ascii' => 'يجب أن يحتوي حقل السمة: فقط على أحرف ورموز أبجدية رقمية أحادية البايت.',
    'before' => 'يجب أن يكون حقل السمة تاريخًا قبل التاريخ.',
    'before_or_equal' => 'يجب أن يكون حقل السمة: تاريخًا قبل أو يساوي:date.',
    'between' => [
        'array' => 'يجب أن يحتوي حقل :attribute على عناصر بين :min و:max.',
        'file' => 'يجب أن يكون حقل السمة بين:min و:max كيلو بايت.',
        'numeric' => 'يجب أن يكون حقل السمة بين :min و:max.',
        'string' => 'يجب أن يكون حقل السمة بين أحرف:min و:max.',
    ],
    'boolean' => 'يجب أن يكون حقل السمة: صحيحًا أو خطأ.',
    'can' => 'يحتوي الحقل:attribute على قيمة غير مصرح بها.',
    'confirmed' => 'تأكيد حقل السمة غير متطابق.',
    'current_password' => 'كلمة المرور غير صحيحة.',
    'date' => 'يجب أن يكون حقل السمة تاريخًا صالحًا.',
    'date_equals' => 'يجب أن يكون حقل السمة تاريخًا مساويًا لـ :date.',
    'date_format' => 'يجب أن يتطابق حقل :attribute مع التنسيق :format.',
    'decimal' => 'يجب أن يحتوي حقل :attribute على منازل عشرية:decimal.',
    'declined' => 'يجب رفض حقل :attribute.',
    'declined_if' => 'يجب رفض حقل :attribute عندما يكون :other هو :value.',
    'different' => 'يجب أن يكون الحقل:attribute و:other مختلفين.',
    'digits' => 'يجب أن يكون حقل السمة: أرقامًا أرقامًا.',
    'digits_between' => 'يجب أن يكون حقل السمة بين رقمين:min و:max.',
    'dimensions' => 'يحتوي الحقل :attribute على أبعاد صورة غير صالحة.',
    'distinct' => 'يحتوي الحقل :attribute على قيمة مكررة.',
    'doesnt_end_with' => 'يجب ألا ينتهي حقل :attribute بأحد القيم التالية::.',
    'doesnt_start_with' => 'يجب ألا يبدأ الحقل :attribute بأحد القيم التالية:values.',
    'email' => 'يجب أن يكون حقل السمة عنوان بريد إلكتروني صالحًا.',
    'ends_with' => 'يجب أن ينتهي حقل السمة بواحد مما يلي: القيم.',
    'enum' => 'السمة المحددة غير صالحة.',
    'exists' => 'السمة المحددة غير صالحة.',
    'extensions' => 'يجب أن يحتوي حقل :attribute على أحد الامتدادات التالية: :values.',
    'file' => 'يجب أن يكون حقل السمة ملفًا.',
    'filled' => 'يجب أن يحتوي حقل :attribute على قيمة.',
    'gt' => [
        'array' => 'يجب أن يحتوي الحقل :attribute على أكثر من عناصر :value.',
        'file' => 'يجب أن يكون حقل السمة أكبر من القيمة بالكيلوبايت.',
        'numeric' => 'يجب أن يكون حقل :attribute أكبر من :value.',
        'string' => 'يجب أن يكون حقل السمة أكبر من أحرف القيمة:.',
    ],
    'gte' => [
        'array' => 'يجب أن يحتوي حقل :attribute على عناصر :value أو أكثر.',
        'file' => 'يجب أن يكون حقل السمة أكبر من أو يساوي القيمة بالكيلوبايت.',
        'numeric' => 'يجب أن يكون حقل السمة أكبر من القيمة أو يساويها.',
        'string' => 'يجب أن يكون حقل السمة أكبر من أو يساوي أحرف القيمة.',
    ],
    'hex_color' => 'يجب أن يكون حقل السمة: لونًا سداسيًا عشريًا صالحًا.',
    'image' => 'يجب أن يكون حقل السمة: صورة.',
    'in' => 'السمة المحددة غير صالحة.',
    'in_array' => 'يجب أن يكون حقل :attribute موجودًا في :other.',
    'integer' => 'يجب أن يكون حقل السمة عددًا صحيحًا.',
    'ip' => 'يجب أن يكون حقل السمة عنوان IP صالحًا.',
    'ipv4' => 'يجب أن يكون حقل السمة عنوان IPv4 صالحًا.',
    'ipv6' => 'يجب أن يكون حقل السمة عنوان IPv6 صالحًا.',
    'json' => 'يجب أن يكون الحقل:attribute عبارة عن سلسلة JSON صالحة.',
    'lowercase' => 'يجب أن يكون حقل السمة: صغيرًا.',
    'lt' => [
        'array' => 'يجب أن يحتوي حقل :attribute على عناصر أقل من :value.',
        'file' => 'يجب أن يكون حقل السمة أقل من القيمة بالكيلو بايت.',
        'numeric' => 'يجب أن يكون حقل :attribute أقل من :value.',
        'string' => 'يجب أن يكون حقل :attribute أقل من :value أحرف.',
    ],
    'lte' => [
        'array' => 'يجب ألا يحتوي حقل :attribute على أكثر من :عناصر القيمة.',
        'file' => 'يجب أن يكون حقل السمة أقل من أو يساوي القيمة بالكيلوبايت.',
        'numeric' => 'يجب أن يكون الحقل:attribute أقل من أو يساوي:value.',
        'string' => 'يجب أن يكون حقل السمة أقل من أو يساوي أحرف القيمة.',
    ],
    'mac_address' => 'يجب أن يكون حقل السمة عنوان MAC صالحًا.',
    'max' => [
        'array' => 'يجب ألا يحتوي حقل :attribute على أكثر من :max من العناصر.',
        'file' => 'يجب ألا يكون حقل السمة أكبر من الحد الأقصى للكيلوبايت.',
        'numeric' => 'يجب ألا يكون حقل السمة أكبر من الحد الأقصى.',
        'string' => 'يجب ألا يكون حقل السمة أكبر من الحد الأقصى لعدد الأحرف. ',
    ],
    'max_digits' => 'يجب ألا يحتوي حقل :attribute على أكثر من :max أرقام.',
    'mimes' => 'يجب أن يكون حقل السمة ملفًا من النوع: القيم.',
    'mimetypes' => 'يجب أن يكون حقل السمة ملفًا من النوع: القيم.',
    'min' => [
        'array' => 'يجب أن يحتوي حقل:attribute على عناصر:min على الأقل.',
        'file' => 'يجب أن يكون حقل :attribute على الأقل:min كيلو بايت.',
        'numeric' => 'يجب أن يكون حقل السمة: دقيقة على الأقل.',
        'string' => 'يجب أن يحتوي حقل :attribute على الأقل على:min أحرف.',
    ],
    'min_digits' => 'يجب أن يحتوي حقل:attribute على أرقام:min على الأقل.',
    'missing' => 'يجب أن يكون حقل السمة مفقودًا.',
    'missing_if' => 'يجب أن يكون حقل :attribute مفقودًا عندما يكون :other هو :value.',
    'missing_unless' => 'يجب أن يكون حقل :attribute مفقودًا ما لم يكن :other هو :value.',
    'missing_with' => 'يجب أن يكون حقل :attribute مفقودًا عند وجود :values.',
    'missing_with_all' => 'يجب أن يكون حقل :attribute مفقودًا عند وجود القيم:.',
    'multiple_of' => 'يجب أن يكون حقل السمة مضاعفًا للقيمة:.',
    'not_in' => 'السمة المحددة غير صالحة.',
    'not_regex' => 'تنسيق حقل السمة غير صالح.',
    'numeric' => 'يجب أن يكون حقل السمة رقمًا.',
    'password' => [
        'letters' => 'يجب أن يحتوي حقل :attribute على حرف واحد على الأقل.',
        'mixed' => 'يجب أن يحتوي حقل :attribute على حرف كبير واحد وحرف صغير واحد على الأقل.',
        'numbers' => 'يجب أن يحتوي حقل :attribute على رقم واحد على الأقل.',
        'symbols' => 'يجب أن يحتوي حقل :attribute على رمز واحد على الأقل.',
        'uncompromised' => 'ظهرت السمة المعطاة في تسرب البيانات. الرجاء اختيار سمة مختلفة.',
    ],
    'present' => 'يجب أن يكون حقل السمة موجودًا.',
    'present_if' => 'يجب أن يكون حقل :attribute موجودًا عندما يكون :other هو :value.',
    'present_unless' => 'يجب أن يكون حقل :attribute موجودًا ما لم يكن :other هو :value.',
    'present_with' => 'The :attribute field must be present when :values is present.',
    'present_with_all' => 'يجب أن يكون حقل السمة موجودًا عند وجود القيم.',
    'prohibited' => 'حقل :attribute محظور.',
    'prohibited_if' => 'يُحظر حقل السمة عندما تكون القيمة :other.',
    'prohibited_unless' => 'حقل :attribute محظور ما لم يكن :other موجودًا في :values.',
    'prohibits' => 'يمنع حقل :attribute :other من التواجد.',
    'regex' => 'تنسيق حقل السمة غير صالح.',
    'required' => 'حقل السمة مطلوب.',
    'required_array_keys' => 'يجب أن يحتوي الحقل:attribute على إدخالات لـ: :values.',
    'required_if' => 'حقل :attribute مطلوب عندما يكون :other هو :value.',
    'required_if_accepted' => 'حقل :attribute مطلوب عند قبول :other.',
    'required_unless' => 'حقل :attribute مطلوب ما لم يكن :other موجودًا في :values.',
    'required_with' => 'حقل :attribute مطلوب عند وجود :values.',
    'required_with_all' => 'حقل :attribute مطلوب عند وجود :values.',
    'required_without' => 'حقل السمة مطلوب عندما لا تكون القيم موجودة.',
    'required_without_all' => 'حقل :attribute مطلوب في حالة عدم وجود أي من :values.',
    'same' => 'يجب أن يتطابق حقل :attribute مع :other.',
    'size' => [
        'array' => 'يجب أن يحتوي حقل :attribute على عناصر :size.',
        'file' => 'يجب أن يكون حقل السمة :size بالكيلوبايت.',
        'numeric' => 'يجب أن يكون حقل السمة :size.',
        'string' => 'يجب أن يتكون حقل السمة: من أحرف الحجم.',
    ],
    'starts_with' => 'يجب أن يبدأ حقل :attribute بأحد القيم التالية: :values.',
    'string' => 'يجب أن يكون حقل السمة: سلسلة.',
    'timezone' => 'يجب أن يكون حقل السمة منطقة زمنية صالحة.',
    'unique' => 'لقد تم بالفعل أخذ السمة:.',
    'uploaded' => 'فشل تحميل السمة:.',
    'uppercase' => 'يجب أن يكون حقل السمة: كبيرًا.',
    'url' => 'يجب أن يكون حقل السمة عنوان URL صالحًا.',
    'ulid' => 'يجب أن يكون حقل السمة: ULID صالحًا.',
    'uuid' => 'يجب أن يكون حقل السمة: UUID صالحًا.',

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
