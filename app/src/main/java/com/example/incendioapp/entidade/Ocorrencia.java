package com.example.incendioapp.entidade;

import java.sql.Date;

public class Ocorrencia {

    private int id;
    private String nomeSolicitante;
    private int numeroViatura;
    private int cep;
    private String descricao;
    private String localizacao;
    private Date data;
    private double areaAtingida;

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public int getNumeroViatura() {
        return numeroViatura;
    }

    public void setNumeroViatura(int numeroViatura) {
        this.numeroViatura = numeroViatura;
    }

    public int getCep() {
        return cep;
    }

    public void setCep(int cep) {
        this.cep = cep;
    }

    public String getDescricao() {
        return descricao;
    }

    public void setDescricao(String descricao) {
        this.descricao = descricao;
    }

    public String getLocalizacao() {
        return localizacao;
    }

    public void setLocalizacao(String localizacao) {
        this.localizacao = localizacao;
    }

    public Date getData() {
        return data;
    }

    public void setData(Date data) {
        this.data = data;
    }

    public double getAreaAtingida() {
        return areaAtingida;
    }

    public void setAreaAtingida(double areaAtingida) {
        this.areaAtingida = areaAtingida;
    }

    public Ocorrencia(String nomeSolicitante) {
        this.nomeSolicitante = nomeSolicitante;
    }

    public String getNomeSolicitante() {
        return nomeSolicitante;
    }


    public Ocorrencia(int id, String nomeSolicitante, int numeroViatura, int cep, String descricao, String localizacao) {
        this.id = id;
        this.nomeSolicitante = nomeSolicitante;
        this.numeroViatura = numeroViatura;
        this.cep = cep;
        this.descricao = descricao;
        this.localizacao = localizacao;
    }

    @Override
    public String toString() {
        return "Ocorrencia{" +
                "id=" + id +
                ", nomeSolicitante='" + nomeSolicitante + '\'' +
                ", numeroViatura=" + numeroViatura +
                ", cep=" + cep +
                ", descricao='" + descricao + '\'' +
                ", localizacao='" + localizacao + '\'' +
                ", data=" + data +
                ", areaAtingida=" + areaAtingida +
                '}';
    }
}

