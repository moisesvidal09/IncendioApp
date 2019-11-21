package com.example.incendioapp;

import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;

import java.util.ArrayList;
import java.util.List;

public class ListaOcorrencia extends AppCompatActivity {

    private static final String TAG = "PERSISTENCIA";
    ArrayList<Ocorrencia> ocorrencias;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_lista_ocorrencia);

        final List<Ocorrencia> ocorrenciaList = new ArrayList<Ocorrencia>();

        for(int i =0; i<20;i++)
        ocorrenciaList.add(new Ocorrencia("Moisés"));

        RecyclerView rvContacts = (RecyclerView) findViewById(R.id.rvOcorrencias);

        final OcorrenciaAdapter adapter = new OcorrenciaAdapter(ocorrenciaList);

        rvContacts.setAdapter(adapter);

        rvContacts.setLayoutManager(new LinearLayoutManager(this));

        Button btnAddOcorrencia = (Button) findViewById(R.id.btnAdicionarOcorrencia);

        btnAddOcorrencia.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                //aqui chama a tela de cadastrar ocorrencia
                ocorrenciaList.add(new Ocorrencia("novo"));
                adapter.notifyItemInserted(ocorrenciaList.size());
            }
        });

    }

}

