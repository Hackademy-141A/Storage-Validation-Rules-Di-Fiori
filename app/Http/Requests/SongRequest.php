<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SongRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'songName' => 'required|string|min:2',
            'artist' => 'required|string|max:25',
            'duration' => 'required|integer|max_digits:1',
            'year' => 'required|max_digits:4|min_digits:4',
            'img' => 'required|image',
        ];
    }

    public function messages() :array
    {
        return[
            'songName.required' => 'inserisci un titolo',
            'songName.string' => 'devi inserire un testo',
            'songName.min' => 'deve essere almeno di 2 caratteri',

            'artist.required' => 'Inserisci il nome artista/vostro nome',
            'artist.string' => 'devi inserire una stringa riguardo il nome',
            'artist.max' => 'non può superare i 25 caratteri',
            
            'duration.required' => 'inserisci la durata',
            'duration.integer' => 'devi mettere un numero intero',
            'duration.max_digits' => 'devi mettere un solo numero intero',

            'year.required'=>'è richiesto l\'anno',
            'year.integer'=>'l\'anno deve essere un numero',
            'year.max_digits'=>'inserisci un anno valido formato da quattro cifre',

            'img.required' => 'immagine richiesta',
            'img.image'=> 'inserisci un formato normale'
        ];
    }
}
