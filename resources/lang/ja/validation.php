<?php

return [
    'accepted'             => ':attributeを承認してください。',
    'active_url'           => ':attributeは正しいURLではありません。',
    'after'                => ':attributeは:dateより後の日付にしてください。',
    'after_or_equal'       => ':attributeは:date以降の日付にしてください。',
    'alpha'                => ':attributeは英字のみにしてください。',
    'alpha_dash'           => ':attributeは英数字とハイフンのみにしてください。',
    'alpha_num'            => ':attributeは英数字のみにしてください。',
    'array'                => ':attributeは配列にしてください。',
    'before'               => ':attributeは:dateより前の日付にしてください。',
    'between'              => [
        'file'    => ':attributeは:min〜:max KBまでのファイルにしてください。',
        'numeric' => ':attributeは:min〜:maxまでにしてください。',
        'string'  => ':attributeは:min〜:max文字にしてください。',
        'array'   => ':attributeは:min〜:max個までにしてください。',
    ],
    'boolean'              => ':attributeはtrueかfalseにしてください。',
    'confirmed'            => ':attributeは確認用項目と一致していません。',
    'date'                 => ':attributeは正しい日付ではありません。',
    'date_equals'          => ':attributeは:dateと同じ日付にしてください。',
    'date_format'          => ':attributeは":format"書式と一致していません。',
    'different'            => ':attributeは:otherと違うものにしてください。',
    'digits'               => ':attributeは:digits桁にしてください',
    'digits_between'       => ':attributeは:min〜:max桁にしてください。',
    'dimensions'           => ':attributeは指定サイズと合致していません。',
    'distinct'             => ':attributeに重複した値を指定することはできません。',
    'email'                => ':attributeを正しいメールアドレスにしてください。',
    'file'                 => ':attributeはファイル形式にしてください。',
    'filled'               => ':attributeは必須です。',
    'exists'               => '選択された:attributeは正しくありません。',
    'gt' => [
        'file'    => ':attributeは:valueKBより大きいファイルにしてください。',
        'numeric' => ':attributeは:valueより大きい数字にしてください。',
        'string'  => ':attributeは:value文字より多い文字数にしてください。',
        'array'   => ':attributeは:value個より多い個数にしてください。',
    ],
    'gte' => [
        'file'    => ':attributeは:valueKB以上のファイルにしてください。',
        'numeric' => ':attributeは:value以上の数字にしてください。',
        'string'  => ':attributeは:value文字以上の文字数にしてください。',
        'array'   => ':attributeは:value個以上の個数にしてください。',
    ],
    'image'                => ':attributeは画像にしてください。',
    'in'                   => '選択された:attributeは正しくありません。',
    'in_array'             => ':attributeはin :otherに存在しません。',
    'integer'              => ':attributeは整数にしてください。',
    'ip'                   => ':attributeを正しいIPアドレスにしてください。',
    'ipv4'                 => 'attributeを正しいIPv4アドレスにしてください。',
    'ipv6'                 => 'attributeを正しいIPv6アドレスにしてください。',
    'json'                 => 'attributeを正しいJSON形式にしてください。',
    'lt' => [
        'file'    => ':attributeは:valueKBより小さいファイルにしてください。',
        'numeric' => ':attributeは:valueより小さい数字にしてください。',
        'string'  => ':attributeは:value文字より少ない文字数にしてください。',
        'array'   => ':attributeは:value個より少ない個数にしてください。',
    ],
    'lte' => [
        'file'    => ':attributeは:valueKB以下のファイルにしてください。',
        'numeric' => ':attributeは:value以下の数字にしてください。',
        'string'  => ':attributeは:value文字以下の文字数にしてください。',
        'array'   => ':attributeは:value個以下の個数にしてください。',
    ],
    'max'                  => [
        'numeric' => ':attributeは:max以下にしてください。',
        'file'    => ':attributeは:max KB以下のファイルにしてください。.',
        'string'  => ':attributeは:max文字以下にしてください。',
        'array'   => ':attributeは:max個以下にしてください。',
    ],
    'mimes'                => ':attributeは:valuesタイプのファイルにしてください。',
    'mimetypes'            => ':attributeは:valuesのうちいずれかのタイプのファイルにしてください。',
    'min'                  => [
        'numeric' => ':attributeは:min以上にしてください。',
        'file'    => ':attributeは:min KB以上のファイルにしてください。.',
        'string'  => ':attributeは:min文字以上にしてください。',
        'array'   => ':attributeは:min個以上にしてください。',
    ],
    'not_in'               => '選択された:attributeは正しくありません。',
    'numeric'              => ':attributeは数字にしてください。',
    'present'              => ':attribute項目が存在しません。',
    'regex'                => ':attributeの書式が正しくありません。',
    'not_regex'            => ':attributeの書式が正しくありません。',
    'required'             => ':attributeは必須です。',
    'required_if'          => ':otherが:valueの時、:attributeは必須です。',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => ':valuesが存在する時、:attributeは必須です。',
    'required_with_all'    => ':valuesが存在する時、:attributeは必須です。',
    'required_without'     => ':valuesが存在しない時、:attributeは必須です。',
    'required_without_all' => ':valuesが存在しない時、:attributeは必須です。',
    'same'                 => ':attributeと:otherは一致していません。',
    'size'                 => [
        'numeric' => ':attributeは:sizeにしてください。',
        'file'    => ':attributeは:size KBにしてください。.',
        'string'  => ':attribute:size文字にしてください。',
        'array'   => ':attributeは:size個にしてください。',
    ],
    'string'               => ':attributeは文字列にしてください。',
    'timezone'             => ':attributeは正しいタイムゾーンをしていしてください。',
    'unique'               => ':attributeは既に存在します。',
    'url'                  => ':attributeを正しい書式にしてください。',
    'starts_with'          => ':attributeは:valuesで始まる必要があります。',
    'unique'               => ':attributeはすでに利用されています。',
    'uploaded'             => ':attributeはアップロードに失敗しました。 ',
    'uuid'                 => ':attributeはUUIDではありません。',

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
