package com.example.incendioapp;

public class Ocorrencia {

    private String nomeSolicitante;

    public Ocorrencia(String nomeSolicitante) {
        this.nomeSolicitante = nomeSolicitante;
    }

    public String getNomeSolicitante() {
        return nomeSolicitante;
    }

    public void setNomeSolicitante(String nomeSolicitante) {
        this.nomeSolicitante = nomeSolicitante;
    }

    @Override
    public String toString() {
        return "Ocorrencia{" +
                "nomeSolicitante='" + nomeSolicitante + '\'' +
                '}';
    }
}

