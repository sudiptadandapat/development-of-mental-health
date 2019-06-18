#######Import libraries################################33

import nltk.classify.util
from nltk.classify import NaiveBayesClassifier
from nltk.corpus import movie_reviews
from nltk.corpus import stopwords
from nltk.tokenize import word_tokenize
import pickle

fileob=open('rough_file_new1.pkl','wb')
def create_word_features(words):
    useful_words = [word for word in words if word not in stopwords.words("english")]
    my_dict = dict([(word, True) for word in useful_words])
    return my_dict


##########Separate positive and negative examples##########


pos_reviews = []
for fileid in movie_reviews.fileids('pos'):
    words = movie_reviews.words(fileid)
    pos_reviews.append((create_word_features(words), 1))
print(len(pos_reviews))

neg_reviews = []
for fileid in movie_reviews.fileids('neg'):
    words = movie_reviews.words(fileid)
    neg_reviews.append((create_word_features(words), 0))
print(len(neg_reviews))


################Train the model######################

train_set = neg_reviews[:750] + pos_reviews[:750]
test_set =  neg_reviews[750:] + pos_reviews[750:]
print(len(train_set),  len(test_set))
classifier = NaiveBayesClassifier.train(train_set)
accuracy = nltk.classify.util.accuracy(classifier, test_set)
print(accuracy * 100)

#########Taking user input##################


x=1
while(x>0):
    review_santa = input('Enter sentence to predict sentiment:')
    print(review_santa )
    words = word_tokenize(review_santa)
    words = create_word_features(words)
    print(classifier.classify(words))
    x=int(input('Do you want to continue: 0.No 1.Yes'))

pickle.dump(classifier,fileob)
fileob.close()
print('end')
filenew=open('rough_file_new1.pkl','rb')
print('Beginning of every document:')
print(filenew)
filenew.close()
