package com.example.incendioapp;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Spinner;
import android.widget.Toast;

import com.example.incendioapp.entidade.Usuario;
import com.example.incendioapp.persistenciaSqlLite.UsuarioBD;

import java.util.Random;

public class MainActivity extends AppCompatActivity {

    private static final String TAG = "PERSISTENCIA";
    private static final String ARQUIVO = "uf.txt";
    private Spinner spinnerUf;
    private Spinner spinnerFunc;
    private EditText edtCPF;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        carregarUfs();
        carregarFuncoes();
        carregarCpf();
        addListenerOnButtomSalvarPreferencias();
    }

    private void carregarUfs() {
        spinnerUf = findViewById(R.id.spUf);

        String[] ufs = getResources().getStringArray(R.array.unidade_federativa);

        ArrayAdapter<String> adapter = new ArrayAdapter<>(this, android.R.layout.simple_spinner_item, ufs);

        adapter.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
        spinnerUf.setAdapter(adapter);

        int sel = com.example.cmp1144.util.PrefUtil.getInteger(getBaseContext(), "UF.cod");

        spinnerUf.setSelection(sel);
    }

    private void carregarFuncoes() {
        spinnerFunc = findViewById(R.id.spFuncao);


        String[] func = getResources().getStringArray(R.array.funcoesSpinner);

        ArrayAdapter<String> adapter = new ArrayAdapter<>(this, android.R.layout.simple_spinner_item, func);
        spinnerFunc.setAdapter(adapter);

        int sel = com.example.cmp1144.util.PrefUtil.getInteger(getBaseContext(), "Func.cod");

        spinnerFunc.setSelection(sel);
    }

    private void carregarCpf() {
        edtCPF = findViewById(R.id.edtCpf);

        String sel = com.example.cmp1144.util.PrefUtil.getString(getBaseContext(), "cpf.des");

        edtCPF.setText(sel);
    }

    public void addListenerOnButtomSalvarPreferencias() {

        spinnerUf = findViewById(R.id.spUf);

        Button btnEntrar = findViewById(R.id.btnEntrar);

        btnEntrar.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {

                com.example.cmp1144.util.PrefUtil.setString(getBaseContext(), "UF.des", String.valueOf(spinnerUf.getSelectedItem()));

                com.example.cmp1144.util.PrefUtil.setInteger(getBaseContext(), "UF.cod", spinnerUf.getSelectedItemPosition());

                com.example.cmp1144.util.PrefUtil.setInteger(getBaseContext(), "Func.cod", spinnerFunc.getSelectedItemPosition());

                com.example.cmp1144.util.PrefUtil.setString(getBaseContext(), "Func.des", String.valueOf(spinnerFunc.getSelectedItem()));


                Random random = new Random();
                edtCPF = findViewById(R.id.edtCpf);

                com.example.cmp1144.util.PrefUtil.setInteger(getBaseContext(), "cpf.cod", random.nextInt(5000)+1);

                com.example.cmp1144.util.PrefUtil.setString(getBaseContext(), "cpf.des", edtCPF.getText().toString());

                Log.d(TAG, "Item salvo nas preferencias: " + spinnerUf.getSelectedItem());

                //Toast.makeText(getApplicationContext(), String.valueOf(spinnerUf.getSelectedItem()), Toast.LENGTH_SHORT).show();
                Toast.makeText(getApplicationContext(), String.valueOf(spinnerFunc.getSelectedItem()), Toast.LENGTH_SHORT).show();
                Usuario usuario = new Usuario();
                usuario.setUF(String.valueOf(spinnerUf.getSelectedItem()));


                UsuarioBD usuarioBD = new UsuarioBD(getBaseContext());

                try {
                    usuarioBD.salvar(usuario);
                    Log.d(TAG, "Inseriu: " + usuario.getId());
                } catch (Exception e) {
                    Log.d(TAG, "Eroo ao Inserir " + usuario.getId());
                    e.printStackTrace();
                }


                Intent i = new Intent(getApplicationContext(), ListaOcorrencia.class);

                startActivity(i);

            }
        });

    }

}