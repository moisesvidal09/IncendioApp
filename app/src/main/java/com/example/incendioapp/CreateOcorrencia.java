package com.example.incendioapp;

import androidx.annotation.RequiresApi;
import androidx.appcompat.app.AppCompatActivity;

import android.os.AsyncTask;
import android.os.Build;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import com.example.incendioapp.entidade.Ocorrencia;
import com.google.gson.Gson;

import org.json.JSONException;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.net.URL;

public class CreateOcorrencia extends AppCompatActivity {
    EditText edtNome;
    EditText edtCep;
    EditText edtNumViatura;
    EditText edtLocal;
    EditText edtArea;
    EditText edtDesc;
    private String json;
    private final String WS_URL = "http://192.168.102.141:8080/incendio/ocorrenciaController/inserir";
    Ocorrencia ocorrencia;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_create_ocorrencia);

        Button btnSalvarOco = findViewById(R.id.btnIncluir);
        edtNome = findViewById(R.id.txtNome);
        edtCep = findViewById(R.id.txtCEP);
        edtNumViatura = findViewById(R.id.txtNumeroViatura);
        edtLocal = findViewById(R.id.txtLocalizacao);
        edtArea = findViewById(R.id.txtAreaAtingida);
        edtDesc = findViewById(R.id.txtDescricao);

        String nome = edtNome.getText().toString();
        ocorrencia = new Ocorrencia(nome);

        btnSalvarOco.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                if(edtNome.getText().toString().equals("")){
                    mostrarMensagem("Preencha o campo nome !");
                }
                else if(edtCep.getText().toString().equals("")){
                    mostrarMensagem("Preencha o campo CEP !");
                }
                else if(edtLocal.getText().toString().equals("")){
                    mostrarMensagem("Preencha o campo localização !");
                }
                else if(edtDesc.getText().toString().equals("")){
                    mostrarMensagem("Preencha o campo descrição !");
                }

            }
        });
    }
    public void mostrarMensagem(String str){
        Toast.makeText(getApplicationContext(),str, Toast.LENGTH_LONG).show();
    }


    private class AsyncWS extends AsyncTask<Void,Void,String> {

        @Override
        protected String doInBackground(Void... voids) {
            try {
                if (Build.VERSION.SDK_INT >= Build.VERSION_CODES.KITKAT) {

                }
            } catch (IOException e) {
                e.printStackTrace();
            } catch (JSONException e) {
                e.printStackTrace();
            }
            return json;
        }

        @Override
        protected void onPostExecute(String json) {
            if (json != null) {

            }
        }


    }
    @RequiresApi(api = Build.VERSION_CODES.KITKAT)
    public static String getJSONObjectFromURL(String urlString) throws IOException, JSONException {
        String line, newjson = "";
        URL urls = new URL(urlString);
        try (BufferedReader reader = new BufferedReader(new InputStreamReader(urls.openStream(), "UTF-8"))) {
            while ((line = reader.readLine()) != null) {
                newjson += line;
            }
            Log.v("JSON: ", newjson);
            return newjson;
        }
    }

    private <T extends Object> T getTranslation(String json, Class<T> cl) {
        return new Gson().fromJson(json, cl);
    }


}

