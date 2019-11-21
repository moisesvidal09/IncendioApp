package com.example.incendioapp;

import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.TextView;
import androidx.recyclerview.widget.RecyclerView;

import com.example.incendioapp.entidade.Ocorrencia;

import java.util.List;

public class OcorrenciaAdapter extends
        RecyclerView.Adapter<OcorrenciaAdapter.ViewHolder> {

    private List<Ocorrencia> ocorrenciaList;

    public OcorrenciaAdapter(List<Ocorrencia> ocorrencias) {
        ocorrenciaList = ocorrencias;
    }

    @Override
    public OcorrenciaAdapter.ViewHolder onCreateViewHolder(ViewGroup parent, int viewType) {
        Context context = parent.getContext();
        LayoutInflater inflater = LayoutInflater.from(context);


        View contactView = inflater.inflate(R.layout.item_ocorrencia, parent, false);


        ViewHolder viewHolder = new ViewHolder(contactView);
        return viewHolder;
    }


    @Override
    public void onBindViewHolder(OcorrenciaAdapter.ViewHolder viewHolder, int position) {

        Ocorrencia ocorrencia = ocorrenciaList.get(position);

        TextView textView = viewHolder.nome;
        textView.setText(ocorrencia.getNomeSolicitante());
        TextView txtId = viewHolder.id;
        textView.setText(ocorrencia.getNomeSolicitante());
        TextView txtLocalizacao = viewHolder.localizacao;
        textView.setText(ocorrencia.getNomeSolicitante());
        TextView txtCep = viewHolder.cep;
        textView.setText(ocorrencia.getNomeSolicitante());
        TextView txtData = viewHolder.dataOcorrencia;
        textView.setText(ocorrencia.getNomeSolicitante());
//        Button btnExibir = viewHolder.exibir;
//        btnExibir.setText("Exibir");
//        btnExibir.setOnClickListener(new View.OnClickListener() {
//            @Override
//            public void onClick(View view) {
//                //aqui chama a tela de exibir
//            }
//        });
//
//        Button btnEditar = viewHolder.editar;
//        btnEditar.setText("Editar");
//        btnEditar.setOnClickListener(new View.OnClickListener() {
//            @Override
//            public void onClick(View view) {
//                //aqui chama a tela de editar
//            }
//        });
    }

    // Returns the total count of items in the list
    @Override
    public int getItemCount() {
        return ocorrenciaList.size();
    }

    public class ViewHolder extends RecyclerView.ViewHolder {

        public TextView nome;
        public TextView id;
        public TextView localizacao;
        public TextView cep;
        public TextView dataOcorrencia;
        public Button exibir;
        public Button editar;


        public ViewHolder(View itemView) {
            super(itemView);

            nome = itemView.findViewById(R.id.nomeSolicitante);
            id = itemView.findViewById(R.id.idOcorrencia);
            localizacao = itemView.findViewById(R.id.localizacao);
            cep = itemView.findViewById(R.id.cep);
            dataOcorrencia = itemView.findViewById(R.id.dataOcorrencia);
//            exibir = itemView.findViewById(R.id.btnExibir);
//            editar = itemView.findViewById(R.id.btnEditar);

        }
    }
}