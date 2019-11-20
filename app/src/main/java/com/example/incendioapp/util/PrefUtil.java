package com.example.cmp1144.util;

import android.content.Context;
import android.content.SharedPreferences;

/**
 * Created by gilcimar on 31/07/16.
 */
public class PrefUtil {

    public static final String PREF_ID = "cmp1144";

    /**
     * Grava um valor boelano no dispositivo
     * @param context
     * @param chave
     * @param valor
     */
    public static void setBoolean(Context context, String chave, boolean valor){
        SharedPreferences pref = context.getSharedPreferences(PREF_ID,0);
        SharedPreferences.Editor editor = pref.edit();
        editor.putBoolean(chave,valor);
        editor.commit();
    }

    /**
     * Obtem um valor boleano armazenado no dispositivo
     * @param context
     * @param chave
     * @return
     */
    public static boolean getBoolean (Context context, String chave){
        SharedPreferences pref = context.getSharedPreferences(PREF_ID,0);
        return pref.getBoolean(chave,true);
    }

    /**
     * Grava um valor inteiro no dispositivo
     * @param context
     * @param chave
     * @param valor
     */
    public static void setInteger(Context context, String chave, int valor){
        SharedPreferences pref = context.getSharedPreferences(PREF_ID,0);
        SharedPreferences.Editor editor = pref.edit();
        editor.putInt(chave,valor);
        editor.commit();
    }

    /**
     * Obtem um valor inteiro armazenado no dispositivo
     * @param context
     * @param chave
     * @return
     */
    public static int getInteger (Context context, String chave){
        SharedPreferences pref = context.getSharedPreferences(PREF_ID,0);
        return pref.getInt(chave,0);
    }

    /**
     * Grava uma string no dispositivo
     * @param context
     * @param chave
     * @param valor
     */
    public static void setString(Context context, String chave, String valor){
        SharedPreferences pref = context.getSharedPreferences(PREF_ID,0);
        SharedPreferences.Editor editor = pref.edit();
        editor.putString(chave,valor);
        editor.commit();
    }

    /**
     * Obtem uma string armazenada no dispositivo
     * @param context
     * @param chave
     * @return
     */
    public static String getString (Context context, String chave){
        SharedPreferences pref = context.getSharedPreferences(PREF_ID,0);
        return pref.getString(chave,"");
    }



}
