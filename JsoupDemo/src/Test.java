import org.jsoup.Jsoup;
import org.jsoup.nodes.Document;
import org.jsoup.nodes.Element;
import org.jsoup.select.Elements;

import java.io.BufferedWriter;
import java.io.File;
import java.io.FileWriter;
import java.io.IOException;
import java.util.Timer;
import java.util.TimerTask;


public class Test {
    public static void main(String[] args) {
        Task1 t1= new Task1 ("Task1");
        Task2 t2=new Task2("Task2");
        Timer time1 = new Timer();
        time1.scheduleAtFixedRate(t1, 0,15*1000);
        Timer time2 = new Timer();
        time2.scheduleAtFixedRate(t2, 0,20*1000);

    }

    public static class Task1 extends TimerTask {
        private String name;

        public Task1 (String n) {
            this.name = n;
        }

        @Override
        public void run() {
            // write content to the file
            String url = "http://rss.cnn.com/rss/edition.rss";
            Document document = null;
            try {
                document = Jsoup.connect(url).get();
            } catch (IOException e) {
                e.printStackTrace();
            }
            BufferedWriter writer = null;
            try
            {
                writer = new BufferedWriter( new FileWriter("src//a.rss"));
                writer.write(document.toString());

            }
            catch ( IOException e) {
                System.out.println(e);
            }
        }
    }

    public static class Task2 extends TimerTask {
        private String name;

        public Task2(String n) {
            this.name = n;
        }

        @Override
        public void run() {
            // retrieve image list from file
            File input = new File("src//a.rss");
            Document doc = null;
            try {
                doc = Jsoup.parse(input, "UTF-8", "http://rss.cnn.com/rss/edition.rss");
            } catch (IOException e) {
                e.printStackTrace();
            }

            assert doc != null;
            Elements images = doc.getElementsByTag("media:group");

            Elements jpg_images = images.select("[url$=.jpg]");
            
            for (Element image : jpg_images){

                // clear previous screen
                System.out.print("\033[H\033[2J");
                System.out.flush();
                
                // print image source list
                System.out.println(image);
           }
        }
    }
}

