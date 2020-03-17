package com.example.homefinalspotify;

import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.TextView;
import android.widget.Toast;

import androidx.recyclerview.widget.RecyclerView;

import com.squareup.picasso.Picasso;

import java.util.List;


public class Adapter extends RecyclerView.Adapter<Adapter.MyviewHolder> {

     private  Context context;
  private List<Item> movieList;

public Adapter(Context context, List<Item> movieList) {
        this.context = context;
        this.movieList = movieList;
        }

public void setMovieList(List<Item> movieList) {
        this.movieList = movieList;
        notifyDataSetChanged();
        }

@Override
public Adapter.MyviewHolder onCreateViewHolder(ViewGroup parent, int viewType) {
        View view = LayoutInflater.from(context).inflate(R.layout.item_recycler,parent,false);
        return new MyviewHolder(view);
        }

@Override
public void onBindViewHolder(Adapter.MyviewHolder holder, int position) {

    Item item=movieList.get(position);


        holder.tvMovieName.setText(item.getName());
    Toast.makeText(context.getApplicationContext(),"Hello Javatpoint",Toast.LENGTH_SHORT).show();
    Picasso.get().load(item.getImages().get(0).getUrl()).into(holder.image);
      //  Glide.with(context).load(movieList.get(position).getImageUrl()).apply(RequestOptions.centerCropTransform()).into(holder.image);
        }

@Override
public int getItemCount() {
        if(movieList != null){
      return movieList.size();
        }
        return 0;

        }

public class MyviewHolder extends RecyclerView.ViewHolder {
    TextView tvMovieName;
    ImageView image;

    public MyviewHolder(View itemView) {
        super(itemView);
        tvMovieName = (TextView)itemView.findViewById(R.id.text_view_result);
        image = (ImageView)itemView.findViewById(R.id.entity_image);
    }
}
}
