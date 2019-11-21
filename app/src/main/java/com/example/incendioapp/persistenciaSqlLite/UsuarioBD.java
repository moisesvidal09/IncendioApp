package com.example.incendioapp.persistenciaSqlLite;

import android.content.ContentValues;
import android.content.Context;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;
import android.util.Log;

import com.example.incendioapp.entidade.Usuario;

public class UsuarioBD extends SQLiteOpenHelper {
    public static final String NOME_BANCO = "com.example.IncendioApp.usuario";
    private static final int VERSAO_BANCO = 1;
    private static final String TAG = "UsuarioBD";

    public UsuarioBD(Context context) {
        super(context, NOME_BANCO, null, VERSAO_BANCO);
    }

    @Override
    public void onCreate(SQLiteDatabase sqLiteDatabase) {
        StringBuffer sql = new StringBuffer();
        sql.append(" CREATE TABLE IF NOT EXISTS usuario (id integer primary key autoincrement, ")
                .append("uf text ); ");

        Log.d(TAG, "Criando a tabela usuario");
        sqLiteDatabase.execSQL(sql.toString());
        Log.d(TAG, "Tabela criada !!!");

    }

    @Override
    public void onUpgrade(SQLiteDatabase sqLiteDatabase, int i, int i1) {

    }

    public void salvar(Usuario usuario) throws Exception {
        SQLiteDatabase db = getWritableDatabase();

        try {
            ContentValues values = new ContentValues();
            values.put("uf", usuario.getUF());


            if (usuario.getId() != 0) {
                String[] whereArgs = new String[]{(String.valueOf(usuario.getId()))};
                if (db.update("usuario", values, "id=?", whereArgs) == 0) {
                    Log.d(TAG, "Não encontrado registro para alteração!");
                    throw new Exception("Registro não encontrado!");

                }
            } else {
                usuario.setId((int) db.insert("usuario", "", values));
            }
        } catch (Exception e) {
            Log.d(TAG, "Erro ao salvar no banco:");
            e.printStackTrace();
            throw e;
        } finally {
            db.close();
        }
    }

    public void excluir(int id) throws Exception {
        SQLiteDatabase db = getWritableDatabase();

        try {
            String[] whereArgs = new String[]{(String.valueOf(id))};
            db.delete("usuario", "id=?", whereArgs);
        } catch (Exception e) {
            Log.d(TAG, "Erro ao excluir no banco:");
            e.printStackTrace();
            throw e;
        } finally {
            db.close();
        }
    }
}

