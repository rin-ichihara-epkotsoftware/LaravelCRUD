<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateJobRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|max:255',
        ];
    }

    public function attributes()
    {
        return [
            'name' => '名称',
        ];
    }

    /**
     * 検証エラーでリダイレクトする URL を取得します。 (Get the URL to redirect to on a validation error.)
     * @see https://github.com/laravel/framework/blob/v9.27.0/src/Illuminate/Foundation/Http/FormRequest.php#L143-L161
     */
    protected function getRedirectUrl()
    {
        if (request()->routeIs('*.update')) {
            // 確認画面→更新バリデーションエラーの場合、編集画面に遷移。
            //   親クラスのgetRedirectUrlでは、パラメータつきURL生成に対応していないため、以下の方法をとる。
            $url = $this->redirector->getUrlGenerator();
            // 編集画面のURLを取得
            return $url->route('admin.jobs.edit', ['job' => request()->route()->parameter('job')]);
        }
        // 親クラス(Illuminate\Foundation\Http\FormRequest) の getRedirectUrl を実行
        return parent::getRedirectUrl();
    }
}
