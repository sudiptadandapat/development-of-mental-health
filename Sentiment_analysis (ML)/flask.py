import nltk.classify.util
from nltk.classify import NaiveBayesClassifier
from nltk.corpus import movie_reviews
from nltk.corpus import stopwords
from nltk.tokenize import word_tokenize
from flask import Flask,jsonify,request
from sklearn.externals import joblib


app = Flask(__name__)
print('this is done')  
@app.route("/")
def hello():
    return "Hello World.this is new!"
@app.route("/out")
def out():
    return "Hello World.this is out!"



classifier=joblib.load('rough_file_new.pkl')
print(classifier)
print('Pickle done')


@app.route("/classify/<sent>",methods=['GET','POST'])
def classify(sent):
    if request.method=='GET':
       return word_classifier(sent)
    else:
        return 'that was not true'
    return 'None'

@app.route("/files")
def write():
    ob=open('final2.txt','r')
    return(ob.read())


def create_word_features(words):
        useful_words = [word for word in words if word not in stopwords.words("english")]
        my_dict = dict([(word, True) for word in useful_words])
        return my_dict
def word_classifier(sent):
    review_santa=sent
    words= word_tokenize(review_santa)
    words = create_word_features(words)
    u=classifier.classify(words)
    ob=open('final2.txt','w')
    if(u=='positive'):
        ob.write(u+'\n')
        
    return (u)

if __name__ == '__main__':
    app.run(debug=True)
